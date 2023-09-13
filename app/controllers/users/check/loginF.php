<?php
global $db;

use myfreee\Validator;

$validator = new Validator();
if ($_SESSION['lang'] != 'ru') {
    $title = 'SIGN IN';
} else {
    $title = 'ВХОД';
}

$secretKey = "6LckmdwnAAAAAEIJWFfexVAS0Z1i-bWNQq1BdieG";
$responseKey = $_POST['g-recaptcha-response'];
$userIP = $_SERVER['REMOTE_ADDR'];

$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";

$response = file_get_contents($url);
$response = json_decode($response);
if ($response->success) {
    $fillable = ['email', 'password'];
    $data = load($fillable);
    $rules = [
        'email' => [
            'required' => true,
            'min' => 5,
            'max' => 50,
            'email' => true,
        ],
        'password' => [
            'required' => true,
            'min' => 5,
            'max' => 50,
        ],
    ];

    $validation = $validator->validate($data, $rules);


    if (!$validation->hasErrors()) {
        if (!$db->query("SELECT * FROM users WHERE email = ?", [$data['email']])->getColumn()) {
            $errLog = 'Пользователь с такой почтой не найден';
            require VIEWS . '/users/login.tpl.php';
            die;
        } else {
            if (password_verify($data['password'], ($db->query("SELECT password FROM users WHERE email = ?", [$data['email']])->find())['password'])) {
                $_SESSION['user'] = ($db->query("SELECT * FROM users WHERE email = ?", [$data['email']])->find());
                redirect('/profile');
            } else {
                $errLog = 'Неправильный пароль';
                require VIEWS . '/users/login.tpl.php';
                die;
            }
        }
    }
} else {
    if ($_SESSION['lang'] != 'ru') {
        $errDb = 'Captcha failed';
    } else {
        $errDb = 'Каптча не пройдена';
    }
    require VIEWS . '/users/login.tpl.php';
    die;
}
