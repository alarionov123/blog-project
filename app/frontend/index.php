<?php
use App\Notifications;

$smarty = new Smarty();

if (isset($_SESSION['notification'])) {
    Notifications::displayNotification($_SESSION['notification']);
    unset($_SESSION['notification']);
}
if (isset($_SESSION['user_data'])) {
    $smarty->assign('user_data', $_SESSION['user_data']);
}
$smarty->display('index.tpl');
?>