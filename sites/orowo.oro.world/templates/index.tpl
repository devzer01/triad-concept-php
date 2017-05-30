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
<h1 class="strong">{#HEADING#}</h1>
<h4 class="tagline" style="font-size: 22px; margin-top: 20px;">{#TAG#}</h4>
<div class="col-md-12 hidden-xs" style="height: 200px;"></div>
<div class="col-xs-12 visible-xs" style="height: 50px;"></div>
{if $smarty.get.type eq "men"}
    {include file="front/men.tpl"}
{else}
    {include file="front/women.tpl"}
{/if}

<footer class="footer">{#FOOTER#}</footer>
<script src="//code.jquery.com/jquery-3.2.1.slim.js" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $(".join").click(function (e) {
            document.location.href = '?action=channel&id=' + $(this).data("id");
        });
        $(".connect").click(function (e) {
            var topic = $("#topic").val();
            if (topic.trim() == "") {
                document.location.href = '?action=channel&id=1'
                return;
            }
            var options = {
                url: '/?action=connect',
                data: { topic: topic, x: '{$smarty.get.type}' },
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
<script>
    {literal}
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-100091867-1', 'auto');
    ga('send', 'pageview');
    {/literal}
</script>
</body>
</html>