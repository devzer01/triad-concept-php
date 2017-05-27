<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- {$smarty.template} -->
{***************************** Start include top menu ********************************}
{include file="top.tpl"}
{******************************* End include top menu ********************************}
<body class="container-fluid">
<h1 class="strong">TO BE HUMANIAN</h1>
<h4 class="tagline" style="font-size: 22px">Soulactos. (Soul Acts) Anonymous</h4>
<div class="col-md-12" style="height: 200px;"></div>
{if $smarty.get.type eq "men"}
    {include file="front/men.tpl"}
{else}
    {include file="front/women.tpl"}
{/if}

<script src="https://code.jquery.com/jquery-3.2.1.slim.js"
        integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>