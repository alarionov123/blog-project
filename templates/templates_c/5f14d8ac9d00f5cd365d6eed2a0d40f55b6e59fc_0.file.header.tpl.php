<?php
/* Smarty version 4.3.4, created on 2023-12-28 12:38:44
  from '/home/abrychkin/phpstormeducation/templates/components/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_658d3414028529_07350551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f14d8ac9d00f5cd365d6eed2a0d40f55b6e59fc' => 
    array (
      0 => '/home/abrychkin/phpstormeducation/templates/components/header.tpl',
      1 => 1703752717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658d3414028529_07350551 (Smarty_Internal_Template $_smarty_tpl) {
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
    <p class="navbar-brand"><?php if ((isset($_smarty_tpl->tpl_vars['user_data']->value))) {
echo $_smarty_tpl->tpl_vars['user_data']->value['firstname'];
}?></p>
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
                    <?php if (!(isset($_smarty_tpl->tpl_vars['user_data']->value))) {?>
                        <a class="dropdown-item" href="/auth?mode=auth">Log in</a>
                        <a class="dropdown-item" href="/auth?mode=register">Register</a>
                    <?php }?>
                    <a class="dropdown-item" href="/profile?mode=view">Profile</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">

            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav><?php }
}
