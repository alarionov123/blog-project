<?php
/* Smarty version 4.3.4, created on 2023-12-23 14:21:50
  from '/home/abrychkin/phpstormeducation/templates/common/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6586b4beea25e1_97982821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94ceb6dc95c901177458373702fcea0fd8fab2b2' => 
    array (
      0 => '/home/abrychkin/phpstormeducation/templates/common/404.tpl',
      1 => 1703323341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/header.tpl' => 1,
    'file:components/footer.tpl' => 1,
  ),
),false)) {
function content_6586b4beea25e1_97982821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="jumbotron mt-4">
    <h1 class="display-4">404 - Not Found</h1>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
