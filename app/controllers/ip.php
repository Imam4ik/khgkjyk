<?php
if ($_SESSION['lang'] !== 'ru') {
    $title = "YOUR IP";
} else {
    $title = "ВАШ IP";
}
require VIEWS . '/ip.tpl.php';
