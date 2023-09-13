<?php
global $db;
$proxis = $_POST['proxis'];
$proxi = "{$_POST['proxi']};";
$id = $_POST['id'];
$proxis .= $proxi;
$db->query("UPDATE services SET proxis = ? WHERE id = $id", [$proxis]);
redirect("/admin/service?id=$id");
