<?php
global $db;
global $mail;
if ($_SESSION['lang'] !== 'ru') {
    $title = "REPLENISHMENT WITH CRYPTOCURRENCY";
} else {
    $title = "ПОПОЛНЕНИЕ КРИПТОВАЛЮТОЙ";
}
if (empty(trim($_POST['hash'])) || empty(trim($_POST['paymentsum']))) {
    $cardsName = $db->query("SELECT * FROM cards")->findAll();
    if ($_SESSION['lang'] != 'ru') {
        $errDb = 'Fill in all the fields';
    } else {
        $errDb = 'Заполните все поля';
    }
    require VIEWS . '/users/payment.tpl.php';
    die;
} else {
    $secretKey = "6LckmdwnAAAAAEIJWFfexVAS0Z1i-bWNQq1BdieG";
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";

    $response = file_get_contents($url);
    $response = json_decode($response);
    if ($response->success) {
        $data['cardname'] = $_POST['cardname'];
        $data['email'] = $_POST['email'];
        $data['paymentsum'] = $_POST['paymentsum'];
        $data['hash'] = $_POST['hash'];
        $db->query("INSERT INTO payments (`cardname`, `email`, `paymentsum`, `hash`) VALUES (:cardname, :email, :paymentsum, :hash)", $data);
        $userEmailForm = $data['email'];
        $user = $db->query("SELECT * FROM users WHERE email = ?", [$userEmailForm])->find();
        $mail->setFrom("proxy@vosov.me", "vosov.me");
        $mail->addAddress('516070@bk.ru', 'vosov.me');
        $mail->Subject = 'Payment Notification';
        $mail->Body = "Пользователь {$data['email']} оплатил криптовалютой на {$data['paymentsum']}. Заявка ждет рассмотрения в админ-панели";
        $mail->AltBody = "Пользователь {$data['email']} оплатил криптовалютой на {$data['paymentsum']}. Заявка ждет рассмотрения в админ-панели";
        $mail->addCustomHeader('X-Mailer: PHP/' . phpversion());
        $mail->send();

        $mail->setFrom("proxy@vosov.me", "vosov.me");
        $mail->addAddress($user['email'], $user['username']);
        $mail->Subject = 'Payment Notification';
        $mail->Body = "Application for replenishment {$data['paymentsum']} has been successfully installed, you can see it in your personal account vosov.me";
        $mail->AltBody = "Application for replenishment {$data['paymentsum']} has been successfully installed, you can see it in your personal account vosov.me";
        $mail->addCustomHeader('X-Mailer: PHP/' . phpversion());
        $mail->send();
        redirect('/profile');
    } else {
        $cardsMin = $db->query("SELECT * FROM cards")->getColumn();
        $cardsLenght = $db->query("SELECT COUNT(*) FROM cards")->find()['COUNT(*)'];
        $cardsMax = ($cardsMin + $cardsLenght) - 1;
        $cardRandom = rand($cardsMin, $cardsMax);
        $cardName = $db->query("SELECT * FROM cards WHERE id = $cardRandom")->find()['cardname'];
        $cardsName = $db->query("SELECT * FROM cards")->findAll();
        if ($_SESSION['lang'] != 'ru') {
            $errDb = 'Captcha failed';
        } else {
            $errDb = 'Каптча не пройдена';
        }
        require VIEWS . '/users/payment.tpl.php';
        die;
    }
}
