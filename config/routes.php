<?php

const MIDDLEWARE = [
    'auth' => myfreee\middleware\Auth::class,
    'guest' => \myfreee\middleware\Guest::class,
    'admin' => \myfreee\middleware\Admin::class,
];
//Pages
$router->get('', 'index.php');
$router->get('faq', 'faq.php');
$router->get('ip', 'ip.php');
$router->get('profile', 'users/profile.php')->only('auth');
$router->get('payment', 'users/payment.php')->only('auth');
$router->post('checkpayment', 'users/check/payment.php')->only('auth');
$router->get('lang', 'language.php');
$router->get('catalog', 'catalog.php');
$router->get('proxi', 'showProxi.php');
$router->get('cart', 'cart.php');
$router->post('addtocard', 'addcart.php');
// Auth/Reg
$router->get('changepass', 'changepass.php')->only('guest');
$router->post('endpassword', 'endpassword.php')->only('guest');
$router->post('checkemail', 'checkemail.php')->only('guest');
$router->get('register', 'users/register.php')->only('guest');
$router->post('setpassword', 'setpassword.php')->only('guest');
$router->post('register/form', 'users/check/registerF.php')->only('guest');
$router->get('login', 'users/login.php')->only('guest');
$router->post('login/form', 'users/check/loginF.php')->only('guest');
$router->get('logout', 'users/logout.php')->only('auth');
$router->get('topay', 'users/check/topay.php')->only('auth');
$router->get('service', 'users/service.php')->only('auth');
$router->get('enterpromo', 'users/promo.php')->only('auth');
$router->post('promoF', 'users/check/promo.php')->only('auth');
$router->get('payment2', 'users/payaaio.php')->only('auth');
$router->post('aaio', 'users/check/aaio.php')->only('auth');
$router->post('addips', 'users/check/addips.php')->only('auth');
// Admin
$router->get('admin', 'admin/admin.php')->only('admin');
$router->post('admin/add', 'admin/add.php')->only('admin');
$router->get('admin/confirm', 'admin/confirm.php')->only('admin');
$router->get('admin/services', 'admin/services.php')->only('admin');
$router->get('admin/service', 'admin/service.php')->only('admin');
$router->post('addipsadm', 'admin/addproxi.php')->only('admin');
$router->get('admin/showusers', 'admin/showusers.php')->only('admin');
// Payment aaio
$router->get('confirmpay', 'confirmpay.php');
$router->get('denypay', 'denypay.php');
