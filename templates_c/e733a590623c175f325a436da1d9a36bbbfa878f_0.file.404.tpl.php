<?php
/* Smarty version 4.3.4, created on 2023-12-28 13:46:21
  from '/home/abrychkin/blog-project/templates/common/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_658d43ed3bd0f2_79457294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e733a590623c175f325a436da1d9a36bbbfa878f' => 
    array (
      0 => '/home/abrychkin/blog-project/templates/common/404.tpl',
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
function content_658d43ed3bd0f2_79457294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="jumbotron mt-4">
    <h1 class="display-4">404 - Not Found</h1>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
