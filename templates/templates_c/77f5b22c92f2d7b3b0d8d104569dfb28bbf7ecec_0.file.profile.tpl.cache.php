<?php
/* Smarty version 4.3.4, created on 2023-12-23 23:17:16
  from '/home/abrychkin/phpstormeducation/templates/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6587323c88c063_93124310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77f5b22c92f2d7b3b0d8d104569dfb28bbf7ecec' => 
    array (
      0 => '/home/abrychkin/phpstormeducation/templates/profile.tpl',
      1 => 1703359035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/header.tpl' => 1,
    'file:components/footer.tpl' => 1,
  ),
),false)) {
function content_6587323c88c063_93124310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5646292696587323c887265_37757114';
$_smarty_tpl->_subTemplateRender("file:components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
<header>
    <h1>User Profile</h1>
</header>

<div class="container-profile">

    <?php if ($_smarty_tpl->tpl_vars['mode']->value === 'view') {?>
    <div class="profile-info">
        <h2><?php echo $_smarty_tpl->tpl_vars['user_data']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user_data']->value['lastname'];?>
</h2>
        <p>Email: <?php echo $_smarty_tpl->tpl_vars['user_data']->value['email'];?>
</p>
        <div class="buttons-container">
            <a href="profile?mode=logout">Log out</a>
            <a href="profile?mode=edit">Edit profile</a>
        </div>
    </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value === 'edit') {?>
    <form action="" method="post">
        <div class="form-group">
            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 <?php }?>
            <br>
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                   value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['email'];?>
">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['password'];?>
">
        </div>
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input name="firstname" type="text" class="form-control" id="firstname" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['firstname'];?>
">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input name="lastname" type="text" class="form-control" id="lastname" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['lastname'];?>
">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php }
$_smarty_tpl->_subTemplateRender("file:components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
<?php }
}
