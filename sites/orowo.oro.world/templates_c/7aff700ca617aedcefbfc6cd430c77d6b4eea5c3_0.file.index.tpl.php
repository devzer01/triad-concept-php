<?php
/* Smarty version 3.1.30, created on 2017-05-27 12:43:47
  from "/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59291213693609_05446978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7aff700ca617aedcefbfc6cd430c77d6b4eea5c3' => 
    array (
      0 => '/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/index.tpl',
      1 => 1495863824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.tpl' => 1,
    'file:front/men.tpl' => 1,
    'file:front/women.tpl' => 1,
  ),
),false)) {
function content_59291213693609_05446978 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->

<?php $_smarty_tpl->_subTemplateRender("file:top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body class="container-fluid">
<h1 class="strong">TO BE HUMANIAN</h1>
<h4 class="tagline" style="font-size: 22px">Soulactos. (Soul Acts) Anonymous</h4>
<div class="col-md-12" style="height: 200px;"></div>
<?php if ($_GET['type'] == "men") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:front/men.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:front/women.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.js"
        integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg="
        crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
