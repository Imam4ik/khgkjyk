<?php

unset($_SESSION['user']);
if (isset($_SESSION['reg'])) {
    unset($_SESSION['reg']);
}
redirect('/');
