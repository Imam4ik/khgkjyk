<?php
if ($_SESSION['lang'] != 'ru') {
    $title = 'ACTIVATE PROMO';
} else {
    $title = 'АКТИВИРОВАТЬ ПРОМОКОД';
}
require VIEWS . '/users/promo.tpl.php';
