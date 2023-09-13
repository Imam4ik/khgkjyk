<?php
global $db;
$id = $_GET['id'] ?? '';
$service = $db->query("SELECT * FROM services WHERE id = ?", [$id])->findOrFail();
$title = 'User service';
require VIEWS . '/admin/service.tpl.php';
