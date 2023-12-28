<?php
/* Smarty version 4.3.4, created on 2023-12-23 14:52:39
  from '/home/abrychkin/phpstormeducation/templates/auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6586bbf797b9e4_76661951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75fc4b4a1a6d13ea296ef13e0a801725cd23c5bc' => 
    array (
      0 => '/home/abrychkin/phpstormeducation/templates/auth.tpl',
      1 => 1703328649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/header.tpl' => 1,
    'file:components/footer.tpl' => 1,
  ),
),false)) {
function content_6586bbf797b9e4_76661951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12935802686586bbf79750e1_35949249';
$_smarty_tpl->_subTemplateRender("file:components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Log in form</title>
</head>
<body>
<div>
    <div class="row align-items-center">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
            <form action="" method="post">
                <div class="form-group">
                    <br>
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                </div>

                <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'register') {?>
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input name="firstname" type="text" class="form-control" id="firstname" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Password">
                </div>

                <?php }?>
                <div class="form-check">
                    <input name="checkbox" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Keep me log in</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php $_smarty_tpl->_subTemplateRender("file:components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
