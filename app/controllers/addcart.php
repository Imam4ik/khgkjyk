<?php
$id = $_POST['id'];
$count = $_POST['count'];
$target = $_POST['target'];
if (!isset($_SESSION['cart'][$id])) {
    $cart['id'] = $id;
    $cart['count'] = $count;
    $cart['target'] = $target;
    $_SESSION['cart'][$id] = $cart;
    redirect('/cart');
} else {
    redirect('/cart');
}
