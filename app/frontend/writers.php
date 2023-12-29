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
        $user = new Users($data);

        if ($user->updateUserData($data)) {
            Notifications::setNotification(
                Notifications::NOTIFICATION_SUCCESS,
                'You have successfully registered as writer.'
            );
            $user_data = $user->getUserDataByEmail($data['email']);
            $_SESSION['user_data'] = $user_data;
            Router::redirect('writers?mode=auth');
        } else {
            Notifications::setNotification(Notifications::NOTIFICATION_ERROR, 'Something went wrong.');
        }
    } elseif ($mode === 'auth') {
        if (empty($data['email']) && Users::getUserType($data['email']) !== UserTypes::WRITER) {
            Notifications::setNotification(Notifications::NOTIFICATION_ERROR, 'Something went wrong.');
            return;
        }
    }
}

$smarty->assign('mode', $mode);
$smarty->assign('page_title', $mode);
$smarty->display('apply_for_writer.tpl');