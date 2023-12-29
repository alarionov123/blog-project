<?php

namespace App;

class Notifications
{
    private $message;
    private $type;
    private $notification;

    public const NOTIFICATION_ERROR = 'error';

    public const NOTIFICATION_SUCCESS = 'success';

    public const NOTIFICATION_WARNING = 'warning';

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getNotificationParams()
    {
        return [
            'type' => $this->type,
            'message' => $this->message
        ];
    }

    public static function setNotification($type, $message) {

        $_SESSION['notification'] = '<div class="notification ' . $type . '">' . $message . '</div>';
    }

    public static function displayNotification($message) {
        if (isset($message)) {
            echo $message;
        }
    }
}