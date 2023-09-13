<?php

global $db;

if ($_POST['do'] === 'addbalance') {
    if (!$db->query("SELECT * FROM users WHERE email = ?", [$_POST['email']])->find()) {
        $errLog = 'User with this email not found';
        require VIEWS . '/admin/admin.tpl.php';
        die;
    } else {
        $userId = ($db->query("SELECT * FROM users WHERE email = ?", [$_POST['email']])->find());
        $balance = $_POST['balance'];
        if ($db->query("UPDATE users SET balance = $balance WHERE id = {$userId['id']}")) {
            redirect('/');
        } else {
            $errLog = 'Failed to send data';
            require VIEWS . '/admin/admin.tpl.php';
            die;
        }
    }
} elseif ($_POST['do'] === 'addpromo') {
    if ($db->query("SELECT * FROM promo WHERE promoname = ?", [$_POST['promo']])->find()) {
        $errPromo = 'There is already such a promo code';
        require VIEWS . '/admin/admin.tpl.php';
        die;
    } else {
        $dataPromo['promoname'] = $_POST['promo'];
        $dataPromo['promouse'] = $_POST['promoNum'];
        $dataPromo['sale'] = $_POST['promoSale'];
        if ($db->query("INSERT INTO promo (`promoname`, `promouse`, `sale`) VALUES (:promoname, :promouse, :sale)", $dataPromo)) {
            redirect('/');
        } else {
            $errPromo = 'Failed to send data';
            require VIEWS . '/admin/admin.tpl.php';
            die;
        }
    }
} elseif ($_POST['do'] === 'addcard') {
    if ($db->query("SELECT * FROM cards WHERE cardname = ?", [$_POST['card']])->find()) {
        $errAddCard = 'This account already exists.';
        require VIEWS . '/admin/admin.tpl.php';
        die;
    } else {
        $dataCard['cardname'] = $_POST['card'];
        if ($db->query("INSERT INTO cards (`cardname`) VALUES (:cardname)", $dataCard)) {
            redirect('/');
        } else {
            $errAddCard = 'Failed to send data';
            require VIEWS . '/admin/admin.tpl.php';
            die;
        }
    }
} elseif ($_POST['do'] === 'delcard') {
    if (!$db->query("SELECT * FROM cards WHERE cardname = ?", [$_POST['delcardname']])->find()) {
        $errDelCard = 'No such account';
        require VIEWS . '/admin/admin.tpl.php';
        die;
    } else {
        if ($db->query("DELETE FROM cards WHERE cardname = ?", [$_POST['delcardname']])) {
            redirect('/');
        } else {
            $errDelCard = 'Failed to send data';
            require VIEWS . '/admin/admin.tpl.php';
            die;
        }
    }
} else {
    abort();
}
