<?php
global $db;
$promo = $_POST['promoname'];
$promocode = $db->query("SELECT * FROM promo WHERE promoname = ?", [$promo])->find();
if (!$promocode) {
    if ($_SESSION['lang'] != 'ru') {
        $title = 'ACTIVATE PROMO';
    } else {
        $title = 'АКТИВИРОВАТЬ ПРОМОКОД';
    }
    if ($_SESSION['lang'] != 'ru') {
        $errLog = 'No such promo code';
    } else {
        $errLog = 'Такого промокода нет';
    }
    require VIEWS . '/users/promo.tpl.php';
    die;
} else {
    if (isset($_SESSION['promo'])) {
        if ($_SESSION['lang'] != 'ru') {
            $title = 'ACTIVATE PROMO';
        } else {
            $title = 'АКТИВИРОВАТЬ ПРОМОКОД';
        }
        if ($_SESSION['lang'] != 'ru') {
            $errLog = 'You have already activated the promo code';
        } else {
            $errLog = 'Вы уже активировали промокод';
        }
        require VIEWS . '/users/promo.tpl.php';
        die;
    }
    $promouse = $promocode['promouse'];
    $updatePromouse = $promouse - 1;
    $promoname = $promocode['promoname'];
    if ($updatePromouse == 0) {
        $db->query("DELETE FROM promo WHERE promoname = ?", [$promoname]);
        $_SESSION['promo'] = $promocode['sale'];
        redirect('/profile');
    } else {
        $db->query("UPDATE promo SET promouse = $updatePromouse WHERE promoname = ?", [$promoname]);
        $_SESSION['promo'] = $promocode['sale'];
        redirect('/profile');
    }
}
