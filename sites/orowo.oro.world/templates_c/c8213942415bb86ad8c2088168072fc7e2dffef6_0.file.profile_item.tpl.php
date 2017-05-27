<?php
/* Smarty version 3.1.30, created on 2017-05-27 00:58:25
  from "/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/profile_item.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59286cc1c752b4_90870027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8213942415bb86ad8c2088168072fc7e2dffef6' => 
    array (
      0 => '/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/profile_item.tpl',
      1 => 1495802176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59286cc1c752b4_90870027 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_regex_replace')) require_once '/home/nayana/code/private/orowo/libs/plugins/modifier.regex_replace.php';
?>
<a href="?action=viewprofile&username=<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
" class="link-profile-img">
<div class="profile-list">
	<div class="boder-profile-img"><img src="images/cm-theme/profile-boder-img.png" width="120" height="121" /></div>
	<div class="img-profile">
	<img border="0" src="thumbnails.php?file=<?php echo $_smarty_tpl->tpl_vars['item']->value['picturepath'];?>
&amp;w=112&amp;h=113" width="112" height="113" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
"/>
	</div>
</div>
</a>

<p><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['item']->value['username'],"/@.*/",'');?>
</p>
<?php if ($_SESSION['sess_mem'] == 1) {?>
<div class="container-quick-icon">
<?php if ($_smarty_tpl->tpl_vars['style']->value == '2') {?>
	<a href="#" class="quick-icon-left del-icon" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Delete');?>
" onclick="removeFavorite('<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
','favorite-list-container', <?php echo $_smarty_tpl->tpl_vars['style']->value;?>
); return false;"></a>
<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['item']->value['username'] != $_SESSION['sess_username']) {?>
	<a href="?action=chat&username=<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
" class="quick-icon-left message-icon" title="Message"></a>
	<?php }?>
	<?php if (($_smarty_tpl->tpl_vars['nofavorite']->value != 'true') && ($_smarty_tpl->tpl_vars['item']->value['username'] != $_SESSION['sess_username'])) {?>
		<?php if (!in_array($_smarty_tpl->tpl_vars['item']->value['username'],$_smarty_tpl->tpl_vars['favorites_list']->value)) {?>
		<a href="#" class="quick-icon-right fav-icon" title="Favorite" onclick="jQuery(this).remove(); return addFavorite('<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
','favorite-list-container');"></a>
		<?php } else { ?>
		<!--ALIGN ICON HERE-->
		<!-- <div class="fav"><img src="images/cm-theme/icon-fav-g.png"/></div> -->
		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['username'] != $_SESSION['sess_username']) {?>
		<a href="#" class="quick-icon-right del-icon-g" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Delete');?>
" onclick="return removeFavorite('<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
','favorite-list-container')"></a>
	<?php }
}?>
</div>
<?php }
}
}
