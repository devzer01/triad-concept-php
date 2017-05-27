<?php
/* Smarty version 3.1.30, created on 2017-05-27 01:21:55
  from "/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59287243da89c1_09892786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3c73ba6097f7ff856885784ea416c40828a3d0c' => 
    array (
      0 => '/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/main.tpl',
      1 => 1495822903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:left-notlogged.tpl' => 1,
    'file:online.tpl' => 3,
    'file:newest_members_box.tpl' => 2,
    'file:banner-verify-mobile.tpl' => 1,
    'file:bonusverify_step1.tpl' => 1,
    'file:my_favorite.tpl' => 1,
  ),
),false)) {
function content_59287243da89c1_09892786 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->
<div id="container-top-content-area">

<?php if (isset($_SESSION['sess_username']) || isset($_COOKIE['sess_username'])) {?>
<div id="container-top-content-sub-l">               
</div>
<h2 class="title" style="margin:0;">Hallo <strong style="color:#fdbe00;"><?php echo $_SESSION['sess_username'];?>
</strong></h2>
<div id="container-content-profile-home">
    <ul id="container-profile-list" style=" float:left;">
    <li>
        <a href="?action=profile">
        <div class="profile-list">
            <div class="boder-profile-img"><img src="images/cm-theme/profile-boder-img.png" width="120" height="121" /></div>
            <div class="img-profile"><img src="thumbnails.php?file=<?php echo $_smarty_tpl->tpl_vars['MyPicture']->value;?>
&w=112&h=113" width="112" height="113" /></div>
        </div>
        </a>
    </li>
    </ul>
    
    <div style="float:left; width:878px; height:120px; margin-top:10px;">
		<div id="container-recent">
			<?php if ($_smarty_tpl->tpl_vars['recent_contacts']->value) {?>
			<fieldset>
				<legend>Letzte Nachrichten</legend>
				<!--Recent -->
				<ul id="container-profile-list-most">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_contacts']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
					<li>
						<a href="?action=viewprofile&username=<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
">
						<div class="profile-list-most">
							<div class="boder-profile-img-most"><img src="images/cm-theme/profile-boder-img.png" width="88" height="89" /></div>
							<div class="img-profile-most"><img src="thumbnails.php?file=<?php echo $_smarty_tpl->tpl_vars['item']->value['picturepath'];?>
&w=82&h=83" width="82" height="83" /></div>
						</div>
						</a>
						<div class="container-quick-icon" style="top: -40px">
							<a href="?action=chat&username=<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
" class="quick-icon-left message-icon" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Message');?>
"></a>
						</div>
					</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul>
				<!--end Recent -->
			</fieldset>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['random_contacts']->value) {?>
			<fieldset>
				<legend>Kontaktvorschläge</legend>
				<!--Recent -->
				<ul id="container-profile-list-most">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['random_contacts']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
					<li>
						<a href="?action=viewprofile&username=<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
">
						<div class="profile-list-most">
							<div class="boder-profile-img-most"><img src="images/cm-theme/profile-boder-img.png" width="88" height="89" /></div>
							<div class="img-profile-most"><img src="thumbnails.php?file=<?php echo $_smarty_tpl->tpl_vars['item']->value['picturepath'];?>
&w=82&h=83" width="82" height="83" /></div>
						</div>
						</a>
						<div class="container-quick-icon" style="top: -40px">
							<a href="?action=chat&username=<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
" class="quick-icon-left message-icon" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Message');?>
"></a>
						</div>
					</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul>
				<!--end Recent -->
			</fieldset>
			<?php }?>
		</div>

</div>
<?php } else { ?>
<div id="container-top-content-sub-l">               

<?php $_smarty_tpl->_subTemplateRender("file:left-notlogged.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="container-register-box">
    <div class="container-boder-register">
	<form id="form_register_small" method="post" action="?action=register">
        <h3 class="title">Registration</h3>
        <label class="text-regis">Nickname:</label>
        <input name="username" type="text" class="input-regis-box" placeholder="Nickname" AUTOCOMPLETE=OFF/>
        <label class="text-regis">BitCoin Addr:</label>
        <input name="email" type="text" class="input-regis-box" placeholder="E-Mail" autocomplete='off'/>
		<label class="text-regis">Purpose of Life:</label>
		<select name="values">
			<option value="improve">Human Race Continuation</option>
			<option value="nopurpose">No Purpose</option>
			<option value="dontknow">Don't know</option>
		</select>
		<label class="text-regis">You Belive in...:</label>
		<select name="belief"></select>
       <!-- <label class="text-regis"></label> -->
		
        <a href="#" class="btn-red btn-register" onclick="document.getElementById('form_register_small').submit(); return false;"><input name="submitbutton" type="submit" value="submit" style="display: none"/>KOSTENLOS ANMELDEN</a>
        
        
	</form>
    </div>
</div>
  
</div>

<div id="container-profile-online">
<h1 class="title">Online</h1>
<?php $_smarty_tpl->_subTemplateRender("file:online.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total'=>"15"), 0, false);
?>

</div>
<div id="container-content">
<?php $_smarty_tpl->_subTemplateRender("file:newest_members_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total'=>"16"), 0, false);
?>

</div>
<?php }?>
</div>

<?php if (($_SESSION['sess_username'] != '')) {?>
    <!--start banner verify -->
	<?php $_smarty_tpl->_subTemplateRender("file:banner-verify-mobile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!--end banner verify -->

	<?php if ((($_smarty_tpl->tpl_vars['bonusid']->value != '') && ($_smarty_tpl->tpl_vars['bonusid']->value > 0))) {?>
		<span id="bonusverify_box">
		<?php $_smarty_tpl->_subTemplateRender("file:bonusverify_step1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</span>
	<?php }?>
    <div style="background:url(images/cm-theme/bg-online-index-page.png) no-repeat; width:481px; height:351px; float:left; margin-top:10px;">
        <div id="container-profile-online-login" style="margin:44px 20px 20px 20px;  -webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; width:392px; float:right;">
        <!--<h1 class="title">Online</h1> -->
        <?php $_smarty_tpl->_subTemplateRender("file:online.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total'=>"6"), 0, true);
?>

        </div>
    </div>
    
    <div id="container-content" style="float:right; width:520px;">
    <?php $_smarty_tpl->_subTemplateRender("file:newest_members_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total'=>"8"), 0, true);
?>

    </div>
	<!--<div id="container-content" style="width:644px;">
	<?php $_smarty_tpl->_subTemplateRender("file:online.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total'=>"5"), 0, true);
?>

	</div>
    <div id="container-content" style="width:352px; height:200px; margin-left:20px;"></div> -->
<?php }?>




<?php $_smarty_tpl->_subTemplateRender("file:my_favorite.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
