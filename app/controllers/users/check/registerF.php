<?php
global $db;
global $mail;

use myfreee\Validator;

if ($_SESSION['lang'] != 'ru') {
    $title = 'SIGN UP';
} else {
    $title = 'РЕГИСТРАЦИЯ';
}
$validator = new Validator();

$secretKey = "6LckmdwnAAAAAEIJWFfexVAS0Z1i-bWNQq1BdieG";
$responseKey = $_POST['g-recaptcha-response'];
$userIP = $_SERVER['REMOTE_ADDR'];

$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";

$response = file_get_contents($url);
$response = json_decode($response);
if ($response->success) {
    $refferer = $_POST['referrer'];
    $fillable = ['username', 'email', 'password', 'repassword'];
    $data = load($fillable);
    $rules = [
        'username' => [
            'required' => true,
            'min' => 1,
            'max' => 20,
        ],
        'email' => [
            'required' => true,
            'min' => 5,
            'max' => 50,
            'email' => true,
            'unique' => 'users:email',
        ],
        'password' => [
            'required' => true,
            'min' => 5,
            'max' => 50,
        ],
        'repassword' => [
            'required' => true,
            'min' => 5,
            'max' => 50,
            'match' => 'password',
        ],
    ];
    $validation = $validator->validate($data, $rules);
    if (!$validation->hasErrors()) {
        unset($data['repassword']);
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        if ($db->query("SELECT * FROM users WHERE id = ?", [$refferer])->find()) {
            $data['refferer'] = $refferer;
            $db->query("UPDATE users SET toreferrer = toreferrer + 1 WHERE id = $refferer");
        } else {
            $data['refferer'] = null;
        }
        $data['toreferrer'] = 0;
        $data['admin'] = 0;
        $data['balance'] = 0;
        if ($db->query("INSERT INTO users (`username`, `password`, `email`, `refferer`, `toreferrer`, `admin`, `balance`) VALUES (:username, :password, :email, :refferer, :toreferrer, :admin, :balance)", $data)) {
            $_SESSION['user'] = ($db->query("SELECT * FROM users WHERE email = ?", [$data['email']])->find());
            $_SESSION['reg'] = 'asd';
            
            $mail->setFrom("proxy@vosov.me", "vosov.me");
            $mail->addAddress($data['email'], $data['username']);
            $mail->Subject = 'Registration notification';
            $mail->Body = "Welcome. {$data['username']}, congratulations on registering with vosov.me.";
            $mail->AltBody = "Welcome. {$data['username']}, congratulations on registering with vosov.me.";
            $mail->addCustomHeader('X-Mailer: PHP/' . phpversion());
            $mail->send();

            redirect('/profile');
        } else {
            $errDb = 'Не удалось отправить данные';
            require VIEWS . '/users/register.tpl.php';
            die;
        }
    } else {
        require VIEWS . '/users/register.tpl.php';
        die;
    }
} else {
    if ($_SESSION['lang'] != 'ru') {
        $errDb = 'Captcha failed';
    } else {
        $errDb = 'Каптча не пройдена';
    }
    require VIEWS . '/users/register.tpl.php';
    die;
}
