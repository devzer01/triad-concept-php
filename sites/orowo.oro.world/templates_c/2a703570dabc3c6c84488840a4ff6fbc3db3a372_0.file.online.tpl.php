<?php
/* Smarty version 3.1.30, created on 2017-05-27 00:35:58
  from "/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/online.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5928677e738e94_12996915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a703570dabc3c6c84488840a4ff6fbc3db3a372' => 
    array (
      0 => '/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/online.tpl',
      1 => 1495802176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5928677e738e94_12996915 (Smarty_Internal_Template $_smarty_tpl) {
?>
<span id='online-result-container'></span>
<?php echo '<script'; ?>
>

jQuery(function(){
	jQuery.get("",{"action": "search", "type": "searchOnline", "total": <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
}, function(data){jQuery('#online-result-container').parent().show();if(data){ jQuery('#online-result-container').html(data)}else{jQuery('#online-result-container').html("<div align='center' style='padding:10px;'><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'NoResult');?>
</div>")}});
	return false;
	});

<?php echo '</script'; ?>
><?php }
}
