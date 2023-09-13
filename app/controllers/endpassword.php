<?php
global $db;
$password = $_POST['password'];
if (mb_strlen($password, 'UTF-8') <= 5) {
    if ($_SESSION['lang'] != 'ru') {
        $title = 'RESTORE PASSWORD';
    } else {
        $title = 'ВОССТАНОВИТЬ ПАРОЛЬ';
    }
    if ($_SESSION['lang'] != 'ru') {
        $errLog = 'Password length must be at least 5 characters';
    } else {
        $errLog = 'Длина пароля должна быть не менее 5 символов';
    }
    require VIEWS . '/setpassword.tpl.php';
    die;
} else {
    $email = $_SESSION['changeemail'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $db->query("UPDATE users SET password = '$password' WHERE email = '$email'");
    unset($_SESSION['num']);
    unset($_SESSION['changeemail']);
    redirect('/login');
}
