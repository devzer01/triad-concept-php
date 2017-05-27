<?php
/* Smarty version 3.1.30, created on 2017-05-27 00:35:58
  from "/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/my_favorite.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5928677e73fd17_23900052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3fcd6eb688dc8eda94a01a3bbf373be3ae5e67c' => 
    array (
      0 => '/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/my_favorite.tpl',
      1 => 1495802176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5928677e73fd17_23900052 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
jQuery(function(){loadFavorite("favorite-list-container", '<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
');});
<?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['style']->value == '2') {?>
<div style="display: none; background:url(images/cm-theme/bg-box-content.png) repeat-x 0 10px; float:left; width:1020px;">
<h5 class="title"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'FAVOURITES');?>
</h5>
<span id="favorite-list-container"></span>
</div>
<?php } else { ?>
<div id="container-favorite" style="display: none;">
<h1 class="title"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'FAVOURITES');?>
</h1>
<span id="favorite-list-container"></span>
</div>
<?php }
}
}
