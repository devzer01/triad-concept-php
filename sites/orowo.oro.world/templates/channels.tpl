<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{#TITLE#}</title>
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/bower_components/bootstrap-vertical-tabs/bootstrap.vertical-tabs.min.css" rel="stylesheet" crossorigin="anonymous">

    <link href="/css/anonymous-{$smarty.get.type}.css" rel="stylesheet" type="text/css" />
    <link href="/css/soulactos.css" rel="stylesheet" type="text/css" />
    <link href="/css/channels.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Holtwood+One+SC" />
</head>
<body class="container-fluid">
<h1 class="strong">TO BE HUMANIST</h1>
<h4 class="tagline" style="font-size: 22px; margin-top: 20px;">Soulactos. (Soul Acts) Anonymous</h4>
<hr style="margin-top: 10px;" />
<div class="col-xs-3">
    <div class="col-xs-12 speak">
        <h3 style="text-align: center;">"Am i Alone?"</h3>
        <hr/>
        <div class="msg-container">
            <p class="message">John: I think there are other living beings in this universe.</p>
            <p class="message">Jane: I have seen some things i can't explain.</p>
        </div>
        <div class="msg">
            <hr/>
            <textarea id="msg" rows="2" cols="40"></textarea>
            <button id="send">Send</button>
        </div>
    </div>
</div>
<div class="col-xs-8" style="text-align: right">&nbsp;</div>
<div class="col-xs-3" style="">
</div>
<div class="col-xs-5" style="float: right">
{foreach from=$channels item=channel}
    <div class="col-sm-3" style="width: 50% !important;">
        <div class="channel-portal">
            <h3 style="height: 100px;">"{$channel.topic}"</h3>
            <hr/>
            <button class="btn">Join Conversation</button>
        </div>
    </div>
{/foreach}
</div>
<script src="/bower_components/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
