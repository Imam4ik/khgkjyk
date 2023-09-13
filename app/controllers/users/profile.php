<?php
global $db;
$profileInfo = $db->query("SELECT * FROM users WHERE id = ?", [$_SESSION['user']['id']])->find();
$reffererInfo = $db->query("SELECT * FROM users WHERE refferer = ?", [$_SESSION['user']['id']])->findAll();
$profileEmail = $profileInfo['email'];
$servicesUser = $db->query("SELECT * FROM services WHERE useremail = ?", [$profileEmail])->findAll();
$paymentUser = $db->query("SELECT * FROM payments WHERE email = ?", [$profileEmail])->findAll();
if (empty($paymentUser)) {
    $paymentUserCount = 0;
} else {
    $paymentUserCount = count($paymentUser);
}
if (empty($servicesUser)) {
    $servicesUserCount = 0;
} else {
    $servicesUserCount = count($servicesUser);
}
if ($_SESSION['lang'] !== 'ru') {
    $title = "PROFILE";
} else {
    $title = "ЛИЧНЫЙ КАБИНЕТ";
}
if ($_SESSION['lang'] != 'ru') {
    if (isset($_SESSION['reg'])) {
        $welcomeText = 'Welcome, ';
    } else {
        $welcomeText = 'Welcome back, ';
    }
} else {
    if (isset($_SESSION['reg'])) {
        $welcomeText = 'Добро пожаловать, ';
    } else {
        $welcomeText = 'С возвращением, ';
    }
}


require VIEWS . '/users/profile.tpl.php';
