<!DOCTYPE html>
<html>
{include file="top.tpl"}
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
</body>
</html>