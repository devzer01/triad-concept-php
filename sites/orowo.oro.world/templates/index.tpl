<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{#TITLE#}</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/anonymous-{$smarty.get.type}.css" rel="stylesheet" type="text/css" />
    <link href="/css/soulactos.css" rel="stylesheet" type="text/css" />
    <link href="/css/tree.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Holtwood+One+SC" />
</head>
<body class="container-fluid">
<h1 class="strong">TO BE HUMANIAN</h1>
<h4 class="tagline" style="font-size: 22px; margin-top: 20px;">Soulactos. (Soul Acts) Anonymous</h4>
<div class="col-md-12" style="height: 200px;"></div>
{if $smarty.get.type eq "men"}
    {include file="front/men.tpl"}
{else}
    {include file="front/women.tpl"}
{/if}

<footer class="footer">This is purely a community stage for individuals to connect with each other.
    Views and Opinions express in this platform are their individual thoughts. <br/>
    The Platform or The creator is not associated with any religious, government or any other institution.</footer>
<script src="//code.jquery.com/jquery-3.2.1.slim.js" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $(".join").click(function (e) {
            document.location.href = '?action=channel&id=' + $(this).data("id");
        });
        $(".connect").click(function (e) {
            var options = {
                url: '/?action=connect',
                data: { topic: $("#topic").val(), x: '{$smarty.get.type}' },
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
</script>
</body>
</html>