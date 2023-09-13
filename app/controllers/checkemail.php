<?php
global $db;
global $mail;
if ($_SESSION['lang'] != 'ru') {
    $title = 'RESTORE PASSWORD';
} else {
    $title = 'ВОССТАНОВИТЬ ПАРОЛЬ';
}
$secretKey = "6LckmdwnAAAAAEIJWFfexVAS0Z1i-bWNQq1BdieG";
$responseKey = $_POST['g-recaptcha-response'];
$userIP = $_SERVER['REMOTE_ADDR'];

$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";

$response = file_get_contents($url);
$response = json_decode($response);
if ($response->success) {
    $user = $db->query("SELECT * FROM users WHERE email = ?", [$_POST['email']])->find();
    if (!$user) {
        if ($_SESSION['lang'] != 'ru') {
            $errLog = 'There is no user with this email';
        } else {
            $errLog = 'Пользователь с такой почтой не найден';
        }
        require VIEWS . '/changepass.tpl.php';
        die;
    } else {
        $num = rand(10000, 99999);
        $_SESSION['num'] = $num;
        $_SESSION['changeemail'] = $user['email'];

        $mail->setFrom("proxy@vosov.me", "vosov.me");
        $mail->addAddress($user['email'], $user['username']);
        $mail->Subject = 'Password recovery';
        $mail->Body = "Password recovery. {$user['username']}, do not share this code with anyone. It is intended for password recovery on vosov.me. Code: $num";
        $mail->AltBody = "Password recovery. {$user['username']}, do not share this code with anyone. It is intended for password recovery on vosov.me. Code: $num";
        $mail->addCustomHeader('X-Mailer: PHP/' . phpversion());
        $mail->send();
        require VIEWS . '/newpass.tpl.php';
    }
} else {
    if ($_SESSION['lang'] != 'ru') {
        $errLog = 'Captcha failed';
    } else {
        $errLog = 'Каптча не пройдена';
    }
    require VIEWS . '/changepass.tpl.php';
    die;
}
