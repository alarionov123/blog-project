<?php

use App\Users;
use App\SmartyInit;
use App\Router;
use App\Notifications;

$smarty = new SmartyInit();

$mode = isset($_GET['mode']) ? $_GET['mode'] : '';

if (isset($_SESSION['notification'])) {
    Notifications::displayNotification($_SESSION['notification']);
    unset($_SESSION['notification']);
}

if (!empty($_SESSION['user_data']) && $mode !== 'edit') {
    Notifications::setNotification(Notifications::NOTIFICATION_WARNING, 'You have already authorized');
    Router::redirect('profile?mode=view');
}

if (empty($mode)) {
    Router::redirect('/');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = $_POST;

    if ($mode === 'register') {
        $user = new Users($data);

        if ($user->updateUserData($data)) {
            Notifications::setNotification(
                Notifications::NOTIFICATION_SUCCESS,
                'You have been registered successfully. Please log in.'
            );
            Router::redirect('auth?mode=auth');
        } else {
            Notifications::setNotification(Notifications::NOTIFICATION_ERROR, 'Something went wrong.');
        }
    } elseif ($mode === 'auth') {
        $user = new Users($data);

        if ($user->isUserExist() && $user->authUser($data)) {
            Notifications::setNotification(
                Notifications::NOTIFICATION_SUCCESS,
                'You have been authorized successfully.'
            );
            Router::redirect('profile?mode=view');
        } else {
            Notifications::setNotification(
                Notifications::NOTIFICATION_ERROR,
                'Incorrect email or password. Please check the specified info and try again.'
            );
        }
    }
}
$smarty->assign('mode', $mode);
$smarty->assign('page_title', $mode);
$smarty->display('auth.tpl');