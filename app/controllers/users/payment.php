<?php
global $db;
$cardsMin = $db->query("SELECT * FROM cards")->getColumn();
$cardsLenght = $db->query("SELECT COUNT(*) FROM cards")->find()['COUNT(*)'];
$cardsMax = ($cardsMin + $cardsLenght) - 1;
$cardRandom = rand($cardsMin, $cardsMax);
$cardName = $db->query("SELECT * FROM cards WHERE id = $cardRandom")->find()['cardname'];
$cardsName = $db->query("SELECT * FROM cards")->findAll();
if ($_SESSION['lang'] !== 'ru') {
    $title = "REPLENISHMENT WITH CRYPTOCURRENCY";
} else {
    $title = "ПОПОЛНЕНИЕ КРИПТОВАЛЮТОЙ";
}
require VIEWS . '/users/payment.tpl.php';
