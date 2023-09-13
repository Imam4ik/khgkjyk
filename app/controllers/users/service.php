<?php
global $db;
$id = $_GET['id'] ?? '';
$service = $db->query("SELECT * FROM services WHERE id = ?", [$id])->findOrFail();
if ($service['useremail'] != $_SESSION['user']['email']) {
    abort();
} else {
    if ($_SESSION['lang'] !== 'ru') {
        $title = "YOUR PROXY: {$service['service']} | {$service['count']} | {$service['target']}";
    } else {
        $title = "ВАШ ПРОКСИ: {$service['service']} | {$service['count']} | {$service['target']}";
    }

    require VIEWS . '/users/service.tpl.php';
}
