<?php
/* Smarty version 3.1.30, created on 2017-05-27 00:35:58
  from "/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5928677e747da8_91179440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23dbb33f238c12b7920559232682276aab8cfe72' => 
    array (
      0 => '/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/footer.tpl',
      1 => 1495802176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5928677e747da8_91179440 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_SESSION['sess_externuser']) {?>
<div class="container-footer">
<div id="container-footer">
<a href="?action=terms"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'AGB');?>
</a>   |  
<a href="?action=imprint"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'IMPRESSUM');?>
</a>   |  
<a href="?action=policy"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'WIDERRUFSRECHT');?>
</a> | 
<a href="?action=faqs"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'FAQS');?>
</a> | 
<a href="?action=refund"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'REFUND_POLICY');?>
</a>
<?php if ($_SESSION['sess_username'] != '' || $_COOKIE['sess_username'] != '') {?>| <a href="?action=delete_account"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_account');?>
</a><?php }?>
</div>
</div>

	<!-- mousewheel plugin -->
	<?php echo '<script'; ?>
 src="js/jquery.mousewheel.min.js"><?php echo '</script'; ?>
>
	<!-- custom scrollbars plugin -->
	<?php echo '<script'; ?>
 src="js/jquery.mCustomScrollbar.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-30528203-3']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		
		<?php if ($_SESSION['sess_id']) {?>
		
		var currentMsgCount = null;
		function showCurrentStatus()
		{
			var mbox = new Ajax.Request("ajaxRequest.php", 
										{
											method: "post", 
											parameters: "action=fetchAllStatus", 
											onComplete: function(originalRequest) {
												if(originalRequest.responseText!="")
												{
													var currentStatus = new Array();
													currentStatus = eval(originalRequest.responseText);
													if(currentStatus['0']==0)
														jQuery("#text_msg").html("");
													else
														jQuery("#text_msg").html("<font class='alert-message-box'>"+ currentStatus['0'] + " " + newmessage + "!</font>");
													
													if(currentStatus['1']==0)
														jQuery("#email_msg").html("");
													else
														jQuery("#email_msg").html("<font class='alert-message-box'>"+ currentStatus['1'] + " " + newmessage + "!</font>");

													if(currentStatus['2']==0)
													{
														currentMsgCount = 0;
														jQuery("#new_msg").html("");
													}
													else
													{
														jQuery("#new_msg").html("<font style='display:block; position:relative; top:-88px; left:35px; margin-left:1px; text-align:center; height:26px; font-size:10px; font-weight:bold; font-style:italic; line-height:24px;  width:27px; background: url(images/cm-theme/alert.png) no-repeat 2px 0; float:left; color:#FFFFFF;'>"+ currentStatus['2'] + "</font>");

														if(currentMsgCount != null)
														{
															if(currentMsgCount < currentStatus['2'])
															{
																currentMsgCount = currentStatus['2'];
																notificationSoundElement.pause();
																notificationSoundElement.play();
															}
														}
														else
															currentMsgCount = currentStatus['2'];
													}
													
													if(currentStatus['3']==0)
														jQuery("#new_sugg").html("");
													else
														jQuery("#new_sugg").html("<font style='display:block; position:relative; top:-8px; margin-left:10px; text-align:center; height:26px; font-size:11px; font-weight:bold; font-style:italic; line-height:26px; float:left; width:27px; background: url(images/cm-theme/alert.png) no-repeat; color:#FFFFFF;'>"+ currentStatus['3'] + "</font>");
												}
											}
										});
		}

		(function(jQuery){
			showCurrentStatus();
			var refreshStatus = setInterval(function() {
				showCurrentStatus();
			}, 5000);
		})(jQuery);
		
		<?php }?>
		
	<?php echo '</script'; ?>
>

<?php }
}
}
