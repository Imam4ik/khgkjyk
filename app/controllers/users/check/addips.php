<?php
global $db;
$ips = $_POST['ips'];
$ip = "{$_POST['ip']};";
$id = $_POST['id'];
$ips .= $ip;
$db->query("UPDATE services SET ips = ? WHERE id = $id", [$ips]);
redirect("/service?id=$id");
