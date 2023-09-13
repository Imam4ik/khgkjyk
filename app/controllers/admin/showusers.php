<?php
global $db;
if ($_SESSION['lang'] != 'ru') {
    $title = 'ALL USERS';
} else {
    $title = 'ВСЕ ПОЛЬЗОВАТЕЛИ';
}
$users = $db->query("SELECT * FROM users")->findAll();
require VIEWS . '/admin/showusers.tpl.php';
