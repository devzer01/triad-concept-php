<?php
/* Smarty version 3.1.30, created on 2017-05-27 00:35:58
  from "/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/left-notlogged.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5928677e72f807_65477176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80aad135f7908901a15ef72882d50c379b1ecbb8' => 
    array (
      0 => '/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/left-notlogged.tpl',
      1 => 1495802176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form-login.tpl' => 1,
  ),
),false)) {
function content_5928677e72f807_65477176 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->
<!-- Login Starts Here -->
<div id="container-login-box">
    <div class="container-boder-login">
        
        <?php $_smarty_tpl->_subTemplateRender("file:form-login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          
    </div>
    <div class="icon-login"><img src="images/cm-theme/icon-login-box.png" width="51" height="44" /></div>
</div>
<!-- Login Ends Here -->
<?php }
}
