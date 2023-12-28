<?php
/* Smarty version 4.3.4, created on 2023-12-23 23:17:16
  from '/home/abrychkin/phpstormeducation/templates/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6587323c88e644_72026240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77f5b22c92f2d7b3b0d8d104569dfb28bbf7ecec' => 
    array (
      0 => '/home/abrychkin/phpstormeducation/templates/profile.tpl',
      1 => 1703359035,
      2 => 'file',
    ),
    '5f14d8ac9d00f5cd365d6eed2a0d40f55b6e59fc' => 
    array (
      0 => '/home/abrychkin/phpstormeducation/templates/components/header.tpl',
      1 => 1703328561,
      2 => 'file',
    ),
    '0eb6e2b25ff477266161fd479fc13111692348e0' => 
    array (
      0 => '/home/abrychkin/phpstormeducation/templates/components/footer.tpl',
      1 => 1703322993,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_6587323c88e644_72026240 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
    <!-- Custom styles for this template -->
    <link href="/css/jumbotron.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <p class="navbar-brand">Test132</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/auth?mode=become_a_writer">Become a writer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My account</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="/auth?mode=auth">Log in</a>
                    <a class="dropdown-item" href="/auth?mode=register">Register</a>
                    <a class="dropdown-item" href="/profile?mode=view">Profile</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">

            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
<header>
    <h1>User Profile</h1>
</header>

<div class="container-profile">

        <form action="" method="post">
        <div class="form-group">
                        <br>
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                   value="alarionov@cs-cart.com">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password" value="<123">
        </div>
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input name="firstname" type="text" class="form-control" id="firstname" value="Test132">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input name="lastname" type="text" class="form-control" id="lastname" value="Name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<footer class="container">
    <p>&copy; Company 2017-2018</p>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
<?php }
}
