<?php
if ($_SESSION['lang'] !== 'ru') {
    $title = "SIGN UP";
} else {
    $title = "РЕГИСТРАЦИЯ";
}
require_once VIEWS . '/users/register.tpl.php';
