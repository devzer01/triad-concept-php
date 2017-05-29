<?php
/* Smarty version 3.1.30, created on 2017-05-27 23:02:05
  from "/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/front/women.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5929a2fd570325_95584940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9f143abf351780f6659959f786350d51b065647' => 
    array (
      0 => '/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/front/women.tpl',
      1 => 1495877572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:front/creator.tpl' => 1,
  ),
),false)) {
function content_5929a2fd570325_95584940 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group form-group-lg">
    <div class="col-sm-5"></div>
    <div class="col-sm-3">
        <input class="form-control" type="text" id="topic" placeholder="why does it always happen to me?">
    </div>
    <div class="col-sm-3"><button type="button" class="btn btn-primary btn-lg connect">Connect</button></div>
</div>
<div class="col-sm-12">
    <div class="col-sm-10"></div>
    <div class="col-sm-2">
        <?php $_smarty_tpl->_subTemplateRender("file:front/creator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</div><?php }
}
