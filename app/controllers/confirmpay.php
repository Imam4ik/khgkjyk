<?php
global $db;
$secret = '82f6e69dafcb445792e25a9176831a24'; // Секретный ключ №2 из настроек магазина
$currency = 'RUB'; // Валюта

if ($_GET['currency'] !== $currency) {
    die("wrong currency");
}

function getIP()
{
    $ip = $_SERVER['REMOTE_ADDR'];

    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    if (isset($_SERVER['HTTP_X_REAL_IP'])) {
        $ip = $_SERVER['HTTP_X_REAL_IP'];
    }

    if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
    }

    $explode = explode(',', $ip);

    if (count($explode) > 1) {
        $ip = $explode[0];
    }

    return trim($ip);
}

// Проверка на IP адрес сервиса (по желанию)
$ctx = stream_context_create([
    'http' => [
        'timeout' => 10
    ]
]);

$ips = json_decode(file_get_contents('https://aaio.io/api/public/ips', false, $ctx));
if (isset($ips->list) && !in_array(getIP(), $ips->list)) {
    die("hacking attempt");
}

//Так же, рекомендуется проверять не был ли этот заказ уже оплачен или отменен
//Оплата прошла успешно, можно проводить операцию.
$explodesss = explode('A', $_GET['order_id']);
$userId = $explodesss[0];
$amount = round($_GET['amount']);
$languages = simplexml_load_file("http://www.cbr.ru/scripts/XML_daily.asp");
foreach ($languages->Valute as $lang) {
    if ($lang["ID"] == 'R01235') { //тип валюты
        $koeficient1 = round(str_replace(',', '.', $lang->Value), 2); //ее значение
        $koeficient1a = $lang->Nominal . ':' . $koeficient1; //запоминаем номинал
    }
}
$koeficient1a = explode(':', $koeficient1a);
$sum = $amount / $koeficient1a[1];
$precision = 2;
$pos = strrpos($sum, '.');
if ($pos !== false) {
    $sum = substr($sum, 0, $pos + 1 + $precision);
}
$balanceUser = $db->query("SELECT * FROM users WHERE id = ?", [$userId])->find()['balance'];
$updateBalance = $balanceUser + $sum;
$db->query("UPDATE users SET balance = $updateBalance WHERE id = ?", [$userId]);
redirect('/profile');
