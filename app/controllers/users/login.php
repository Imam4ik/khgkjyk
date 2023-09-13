<?php
if ($_SESSION['lang'] !== 'ru') {
    $title = "SIGN IN";
} else {
    $title = "ВХОД";
}
require_once VIEWS . '/users/login.tpl.php';
