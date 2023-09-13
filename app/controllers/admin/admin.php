<?php
global $db;
$allRecen = $db->query("SELECT * FROM payments")->findAll();
$title = 'ADMIN PANEL';


require VIEWS . '/admin/admin.tpl.php';
