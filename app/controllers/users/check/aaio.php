<?php
if (!is_numeric($_POST['amount']) || $_POST['amount'] < 1000) {
    if ($_SESSION['lang'] != 'ru') {
        $errLog = "The minimum replenishment amount is 1000 RUB";
        $title = 'REPLENISHMENT FROM RUSSIAN CARDS';
    } else {
        $errLog = "Минимальная сумма пополнения: 1000 RUB";
        $title = 'ПОПОЛНЕНИЕ С РОССИЙСКИХ КАРТ';
    }
    require VIEWS . '/users/payaaio.tpl.php';
    die;
} else {
    if ($_SESSION['lang'] != 'ru') {
        $title = "Payable: {$_POST['amount']}";
    } else {
        $title = "К оплате: {$_POST['amount']}";
    }
    $merchant_id = '1eb3783f-0f02-4e94-89c4-92879c67179a';
    $amount = $_POST['amount'];
    $currency = 'RUB';
    $date = date('HsG');
    $order_id = "{$_SESSION['user']['id']}A{$date}";
    $secret = '1abbde34d55dd4bd2e20f2d46f4547b9';
    $desc = 'Пополнение личного кабинета';
    $lang = 'RU';
    $sign = hash('sha256', implode(':', [$merchant_id, $amount, $currency, $secret, $order_id]));
    $languages = simplexml_load_file("http://www.cbr.ru/scripts/XML_daily.asp");
    //валюты
    foreach ($languages->Valute as $lang) {
        if ($lang["ID"] == 'R01235') { //тип валюты
            $koeficient1 = round(str_replace(',', '.', $lang->Value), 2); //ее значение
            $koeficient1a = $lang->Nominal . ':' . $koeficient1; //запоминаем номинал
        }
    }
    $koeficient1a = explode(':', $koeficient1a);
    $sum = $amount / $koeficient1a[1];
    $precision = 2; //количество оставляемых символов
    $pos = strrpos($sum, '.'); // при необходимости заменить на просто strpos
    if ($pos !== false) {
        $sum = substr($sum, 0, $pos + 1 + $precision);
    }
    require VIEWS . '/aaio.tpl.php';
}
