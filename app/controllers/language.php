<?php
$previous_page = $_SERVER['HTTP_REFERER'];
if ($_GET['lang'] === 'ru') {
    $_SESSION['lang'] = 'ru';
    header('Location: ' . $previous_page);
    exit;
}
if ($_GET['lang'] === 'eu') {
    $_SESSION['lang'] = 'eu';
    header('Location: ' . $previous_page);
    exit;
}
