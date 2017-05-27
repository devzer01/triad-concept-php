<?php
/* Smarty version 3.1.30, created on 2017-05-27 00:35:58
  from "/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/profile_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5928677ed15529_29436661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40a54d13744581c5d99b583175dc95d3aeff0dde' => 
    array (
      0 => '/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/profile_list.tpl',
      1 => 1495820035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:profile_item.tpl' => 1,
  ),
),false)) {
function content_5928677ed15529_29436661 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_paginate_prev')) require_once '/home/nayana/code/private/orowo/libs/plugins/function.paginate_prev.php';
if (!is_callable('smarty_function_paginate_middle')) require_once '/home/nayana/code/private/orowo/libs/plugins/function.paginate_middle.php';
if (!is_callable('smarty_function_paginate_next')) require_once '/home/nayana/code/private/orowo/libs/plugins/function.paginate_next.php';
?>
<ul id="container-profile-list">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
	<?php if ($_smarty_tpl->tpl_vars['item']->value['username']) {?>
    <li>
	<?php $_smarty_tpl->_subTemplateRender("file:profile_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nofavorite'=>$_smarty_tpl->tpl_vars['nofavorite']->value,'style'=>$_smarty_tpl->tpl_vars['style']->value), 0, true);
?>

    </li>
	<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php if ($_smarty_tpl->tpl_vars['paginate']->value == 'true') {?>
<br class="clear"/>
<div class="page"><?php echo smarty_function_paginate_prev(array('onclick'=>"return page(this)",'class'=>"pre-pager"),$_smarty_tpl);?>
 <?php echo smarty_function_paginate_middle(array('onclick'=>"return page(this)",'class'=>"num-pager"),$_smarty_tpl);?>
 <?php echo smarty_function_paginate_next(array('onclick'=>"return page(this)",'class'=>"next-pager"),$_smarty_tpl);?>
</div>
<?php }
}
}
