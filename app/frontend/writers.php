<?php

use App\Users;
use App\SmartyInit;
use App\Router;
use App\Notifications;
use App\UserTypes;
use App\Writer;

$smarty = new SmartyInit();

$mode = isset($_GET['mode']) ? $_GET['mode'] : '';

if (isset($_SESSION['notification'])) {
    Notifications::displayNotification($_SESSION['notification']);
    unset($_SESSION['notification']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST;
    if ($mode === 'apply_for_writer') {
        $params = [
            'user_type' => 'W',
        ];
        $data = array_merge($data, $params);
        $writer = new Writer($data);

        if ($writer->updateUserData($data)) {
            Notifications::setNotification(
                Notifications::NOTIFICATION_SUCCESS,
                'You have successfully registered as writer.'
            );

            Router::redirect('writers?mode=auth');
        } else {
            Notifications::setNotification(Notifications::NOTIFICATION_ERROR, 'Something went wrong.');
        }
    } elseif ($mode === 'auth') {
        if (empty($data['email']) && Users::getUserType($data['email']) !== UserTypes::WRITER) {
            Notifications::setNotification(Notifications::NOTIFICATION_ERROR, 'Something went wrong.');
            return;
        }
        $writer = new Users($data);

        if ($writer->isUserExist() && $writer->authUser($data)) {
            Notifications::setNotification(
                Notifications::NOTIFICATION_SUCCESS,
                'You have been authorized successfully.'
            );
            Router::redirect('writer?mode=view');
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
$smarty->assign('user_data', Writer::fetchCurrentUser());
$smarty->display('writers.tpl');