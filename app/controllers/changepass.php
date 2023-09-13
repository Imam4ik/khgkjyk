<?php
if ($_SESSION['lang'] != 'ru') {
    $title = 'RESTORE PASSWORD';
} else {
    $title = 'ВОССТАНОВИТЬ ПАРОЛЬ';
}
require VIEWS . '/changepass.tpl.php';
