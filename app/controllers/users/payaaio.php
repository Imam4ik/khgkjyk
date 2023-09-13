<?php
if ($_SESSION['lang'] != 'ru') {
    $title = 'REPLENISHMENT FROM RUSSIAN CARDS';
} else {
    $title = 'ПОПОЛНЕНИЕ С РОССИЙСКИХ КАРТ';
}

require VIEWS . '/users/payaaio.tpl.php';
