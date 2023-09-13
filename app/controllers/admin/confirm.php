<?php
global $mail;
$type = $_GET['type'];
$email = $_GET['email'];
$sum = $_GET['sum'];
$id = $_GET['id'];
global $db;
if ($type == 'accept' || $type == 'deny') {
    if ($type === 'accept') {
        $balanceUser = $db->query("SELECT * FROM users WHERE email = ?", [$email])->find()['balance'];
        $updateBalance = $balanceUser + $sum;
        $db->query("UPDATE users SET balance = $updateBalance WHERE email = ?", [$email]);
        $db->query("DELETE FROM payments WHERE id = ?", [$id]);
        $user = $db->query("SELECT * FROM users WHERE email = ?", [$email])->find();
        $mail->setFrom("proxy@vosov.me", "vosov.me");
        $mail->addAddress($user['email'], $user['username']);
        $mail->Subject = 'Replenishment request approved';
        $mail->Body = "Hello {$user['username']}, your {$sum} deposit has been approved. vosov.me";
        $mail->AltBody = "Hello {$user['username']}, your {$sum} deposit has been approved. vosov.me";
        $mail->addCustomHeader('X-Mailer: PHP/' . phpversion());
        $mail->send();
        redirect('/admin');
    } else {
        $db->query("DELETE FROM payments WHERE id = ?", [$id]);
        $user = $db->query("SELECT * FROM users WHERE email = ?", [$email])->find();
        $mail->setFrom("proxy@vosov.me", "vosov.me");
        $mail->addAddress($user['email'], $user['username']);
        $mail->Subject = 'Replenishment request rejected';
        $mail->Body = "Hello {$user['username']}, your top up request for {$sum} has been rejected. vosov.me";
        $mail->AltBody = "Hello {$user['username']}, your top up request for {$sum} has been rejected. vosov.me";
        $mail->addCustomHeader('X-Mailer: PHP/' . phpversion());
        $mail->send();
        redirect('/admin');
    }
} else {
    abort();
}
