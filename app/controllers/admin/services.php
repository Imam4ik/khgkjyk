<?php
global $db;
$services = $db->query("SELECT * FROM services")->findAll();
$title = 'User services';
require VIEWS . '/admin/services.tpl.php';
