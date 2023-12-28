<?php

use App\Router;

Router::page('', 'index', 'frontend');
Router::page('/auth', 'auth', 'frontend');
Router::page('/profile', 'profile', 'frontend');
Router::page('/writer', 'writer', 'backend');
//Router::page('/auth', 'auth');

Router::enable();