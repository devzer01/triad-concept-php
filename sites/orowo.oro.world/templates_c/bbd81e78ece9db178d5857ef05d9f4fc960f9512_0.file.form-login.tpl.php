<?php
/* Smarty version 3.1.30, created on 2017-05-27 00:35:58
  from "/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/form-login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5928677e736357_84393160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbd81e78ece9db178d5857ef05d9f4fc960f9512' => 
    array (
      0 => '/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/form-login.tpl',
      1 => 1495802176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5928677e736357_84393160 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->
<form id="loginForm" onsubmit="ajaxRequest('login', 'username='+$('l_username').value+'&amp;password='+$('l_password').value, '', loginSite, '')" action="" method="post">

<label class="text"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'USERNAME');?>
:</label>
<input type="text" name="l_username" id="l_username" class="input-login-box" onkeypress="enterLogin(event)"/>

<label class="text"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PASSWORD');?>
:</label>
<input type="password" name="l_password" id="l_password" class="input-login-box" onkeypress="enterLogin(event)"/>
<span class="login-span-box">
<input name="remember" id="remember" type="checkbox" value="1" <?php if(empty($_COOKIE[notremember])){echo 'checked="checked"';} ?> /><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Remember_me');?>

</span>

<label class="text txt-register"><a href="#" class="forgetPass" onclick="loadPagePopup('?action=forget', '100%'); return false;"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PASSWORD');
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'FORGOTTEN');?>
?</a></label>
<a href="#" id="login" onclick="ajaxRequest('login', 'username='+document.getElementById('l_username').value+'&amp;password='+document.getElementById('l_password').value+rememberMe(), '', loginSite, '')" class="btn-yellow-s"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'login');?>
</a>

<a href="<?php echo @constant('FACEBOOK_LOGIN_URL');
echo $_SESSION['state'];?>
" class="btn-yellow-s facebook-log"><!--<img src="images/cm-theme/btn_facebooklogin.png"> --><span style="display:none;">face book</span></a>
</form>

<!--<span>
<a href="?action=register&amp;type=membership"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Register');?>
</a> | 
<a href=""></a> | 
<a href="?action=resendactivation"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'resend_title');?>
</a>
</span>
 -->

<?php echo '<script'; ?>
>
var sendingForgetPassword = false;
<?php echo '</script'; ?>
><?php }
}
