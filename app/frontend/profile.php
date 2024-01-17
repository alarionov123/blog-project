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

if (empty($mode)) {
    Router::redirect('/');
}

if (empty($_SESSION['user_data'])) {
    Router::redirect('auth?mode=auth');
}

$user_data = Users::fetchCurrentUser();
$user = new Users($user_data);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode === 'edit') {
        if (!empty($_POST)) {
            if ($user->updateUserData($_POST)) {
                Notifications::setNotification(
                    Notifications::NOTIFICATION_SUCCESS,
                    'Your profile data has been successfully changed'
                );

                Router::redirect('profile?mode=view');
            } else {
                Notifications::setNotification(Notifications::NOTIFICATION_ERROR, 'Something went wrong');
            }
        }
    }
}
if ($mode === 'logout') {
    Users::userLogout($user_data['id']);
}
$smarty->assign([
    'user_data' => $user_data,
    'mode' => $mode,
    'page_title' => $mode
]);
$smarty->display('profile.tpl');


