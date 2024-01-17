<?php

use App\Notifications;
use App\SmartyInit;
use App\Writer;

$smarty = new SmartyInit();

$mode = isset($_GET['mode']) ? $_GET['mode'] : '';

if (isset($_SESSION['notification'])) {
    Notifications::displayNotification($_SESSION['notification']);
    unset($_SESSION['notification']);
}

if (!isset($mode)) {
    header("Location: /");
    exit;
}

if ($mode === 'logout') {
    session_destroy();
    header("Location: /");
}

if ($mode === 'manage_blog') {

}

$smarty->assign('mode', $mode);
$smarty->assign('page_title', $mode);
$smarty->assign('user_data', Writer::fetchCurrentUser());
$smarty->display('writer_account.tpl');