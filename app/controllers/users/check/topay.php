<?php
global $db;
global $mail;
if (isset($_SESSION['cart'])) {
    $idUser = $_SESSION['user']['id'];
    $user = $db->query("SELECT * FROM users WHERE id = ?", [$idUser])->find();
    $balanceUser = $user['balance'];
    if (substr($_SESSION['topay'], 0, 1) == '-') {
        $_SESSION['topay'] = 0;
    }
    if ($_SESSION['topay'] > $balanceUser) {
        redirect('/payment');
    } else {
        $data['useremail'] = $user['email'];
        foreach ($_SESSION['cart'] as $k => $v) {
            $idProxi = $v['id'];
            $service = $db->query("SELECT * FROM proxi WHERE id = ?", [$idProxi])->find();
            $data['service'] = $service['name'];
            $data['count'] = $v['count'];
            $data['target'] = $v['target'];
            $db->query("INSERT INTO services (`useremail`, `service`, `count`, `target`) VALUES (:useremail, :service, :count, :target)", $data);
        }
        $updateBalance = $balanceUser - $_SESSION['topay'];
        $db->query("UPDATE users SET balance = $updateBalance WHERE id = ?", [$idUser]);
        $_SESSION['user']['balance'] = $updateBalance;

        if ($_SESSION['lang'] != 'ru') {
            $mailPostText = "Hi, {$user['username']}, congratulations on your {$_SESSION['topay']} $ purchase. You can view your services in your account. Best regards, vosov.me team.";
            $mailPostSubject = 'Purchase Alert';
        } else {
            $mailPostSubject = 'Оповещение о покупке';
            $mailPostText = "Приветствуем, {$user['username']}, поздравляем с покупкой на сумму {$_SESSION['topay']} $. Вы можете посмотреть свои услуги в личном кабинете. С уважением, команда vosov.me.";
        }

        $mail->setFrom("proxy@vosov.me", "vosov.me");
        $mail->addAddress($user['email'], $user['username']);
        $mail->Subject = $mailPostSubject;
        $mail->Body =  $mailPostText;
        $mail->AltBody =  $mailPostText;
        $mail->addCustomHeader('X-Mailer: PHP/' . phpversion());
        $mail->send();
        unset($_SESSION['cart']);
        unset($_SESSION['promo']);
        redirect('/profile');
    }
} else {
    redirect('/');
}
