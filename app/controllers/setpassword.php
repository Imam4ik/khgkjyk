<?php
if ($_SESSION['lang'] != 'ru') {
    $title = 'RESTORE PASSWORD';
} else {
    $title = 'ВОССТАНОВИТЬ ПАРОЛЬ';
}
$code = $_POST['code'];
$email = $_SESSION['changeemail'];
$num = $_SESSION['num'];
if ($_SESSION['num'] != $code) {
    if ($_SESSION['lang'] != 'ru') {
        $errLog = 'Codes dont match';
    } else {
        $errLog = 'Коды не совпадают';
    }
    require VIEWS . '/newpass.tpl.php';
    die;
} else {
    require VIEWS . '/setpassword.tpl.php';
    die;
}
