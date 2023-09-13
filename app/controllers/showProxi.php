<?php
$id = $_GET['id'] ?? '';
global $db;
$proxi = $db->query("SELECT * FROM proxi WHERE id = ?", [$id])->findOrFail();

$count = explode(';', $proxi['count']);
$target = explode(';', $proxi['target']);
if ($_SESSION['lang'] !== 'ru') {
    $title = "Proxi: {$proxi['name']}";
} else {
    $title = "Прокси: {$proxi['name']}";
}
require VIEWS . '/showProxy.tpl.php';
