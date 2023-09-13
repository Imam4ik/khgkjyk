<?php
if ($_SESSION['lang'] !== 'ru') {
    $title = "HOME";
} else {
    $title = "ГЛАВНАЯ";
}
require_once VIEWS . '/index.tpl.php';
