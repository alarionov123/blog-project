<?php

use App\Users;


function fetchCurrentUser()
{
    $userId = $_SESSION['user_data']['id'] ?? null;

    return $userId ? Users::find($userId) : new Guest();
}