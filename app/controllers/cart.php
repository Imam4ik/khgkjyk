<?php
$id = $_GET['id'] ?? 'show';
$do = $_GET['do'] ?? 'show';
global $db;
if ($do !== 'show' && $do !== 'delete' && $do !== 'deleteall') {
    abort();
} else {
    if ($do === 'delete') {
        if (isset($_SESSION['cart'][$id])) {
            unset($_SESSION['cart'][$id]);
            if (empty($_SESSION['cart'])) {
                unset($_SESSION['cart']);
            }
            redirect('/cart');
        } else {
            redirect('/cart');
        }
    } elseif ($do === 'deleteall') {
        if (isset($_SESSION['cart'])) {
            unset($_SESSION['cart']);
        } else {
            redirect('/cart');
        }
    }
}

$_SESSION['topay'] = 0;
if (isset($_SESSION['promo'])) {
    $_SESSION['topay'] = $_SESSION['topay'] - $_SESSION['promo'];
}
if ($_SESSION['lang'] !== 'ru') {
    $title = "CART";
} else {
    $title = "КОРЗИНА";
}
require VIEWS . '/cart.tpl.php';
