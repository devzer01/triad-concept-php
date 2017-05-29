<?php
/* Smarty version 3.1.30, created on 2017-05-27 23:02:05
  from "/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5929a2fd56d782_07740026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7aff700ca617aedcefbfc6cd430c77d6b4eea5c3' => 
    array (
      0 => '/home/nayana/code/private/orowo/sites/orowo.oro.world/templates/index.tpl',
      1 => 1495892590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:front/men.tpl' => 1,
    'file:front/women.tpl' => 1,
  ),
),false)) {
function content_5929a2fd56d782_07740026 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TITLE');?>
</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/anonymous-<?php echo $_GET['type'];?>
.css" rel="stylesheet" type="text/css" />
    <link href="/css/soulactos.css" rel="stylesheet" type="text/css" />
    <link href="/css/tree.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Holtwood+One+SC" />
</head>
<body class="container-fluid">
<h1 class="strong">TO BE HUMANIAN</h1>
<h4 class="tagline" style="font-size: 22px; margin-top: 20px;">Soulactos. (Soul Acts) Anonymous</h4>
<div class="col-md-12" style="height: 200px;"></div>
<?php if ($_GET['type'] == "men") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:front/men.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:front/women.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>

<footer class="footer">This is purely a community stage for individuals to connect with each other.
    Views and Opinions express in this platform are their individual thoughts. <br/>
    The Platform or The creator is not associated with any religious, government or any other institution.</footer>
<?php echo '<script'; ?>
 src="//code.jquery.com/jquery-3.2.1.slim.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function (e) {
        $(".connect").click(function (e) {
            var options = {
                url: '/?action=connect',
                data: { topic: $("#topic").val(), x: '<?php echo $_GET['type'];?>
' },
                method: 'POST',
                dataType: 'json'
            };
            $.ajax(options).then(function (e) {
                if (e.id > 0) {
                    document.location.href = '?action=channel&id=' + e.id;
                }
            });
        });
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
