<?php
/* Smarty version 3.1.30, created on 2017-05-27 00:35:58
  from "/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/newest_members_box.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5928677e73c363_71678988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e7f0e3ce73b24a5e7d047dab7f249a6f6348602' => 
    array (
      0 => '/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/newest_members_box.tpl',
      1 => 1495802176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5928677e73c363_71678988 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="title"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Newest_main');?>
</h1>
<span id='newest-result-container'></span>
<?php echo '<script'; ?>
>

jQuery(function(){
	jQuery.get("",{"action": "search", "type": "searchNewestMembers"<?php if ($_smarty_tpl->tpl_vars['total']->value) {?>, "total": <?php echo $_smarty_tpl->tpl_vars['total']->value;
}?>}, function(data){jQuery('#newest-result-container').parent().show();if(data){ jQuery('#newest-result-container').html(data)}else{jQuery('#newest-result-container').html("<div align='center' style='padding:10px;'><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'NoResult');?>
</div>")}});
	return false;
	});

<?php echo '</script'; ?>
><?php }
}
