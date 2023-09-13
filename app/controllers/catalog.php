<?php
global $db;
$catalog = $db->query("SELECT * FROM proxi")->findAll();
if ($_SESSION['lang'] !== 'ru') {
    $title = "BUY PROXI";
} else {
    $title = "КУПИТЬ ПРОКСИ";
}
require VIEWS . '/catalog.tpl.php';
