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
        <h3 style="text-align: center;" id="title"><i>"{$channel.topic}"</i></h3>
        <hr/>
        <div class="msg-container" id="msg-container">
            {foreach from=$messages item=message}
                <p class="message">{$message.sender}: {$message.msg}</p>
            {/foreach}
        </div>
        <div class="msg">
            <hr/>
            <textarea id="msg" rows="2" cols="40"></textarea>
            <button id="send" data-topic-id="0">Send</button>
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
            <button class="btn join" id="{$channel.id}" data-id="{$channel.id}" data-topic="{$channel.topic}">Join Conversation</button>
        </div>
    </div>
{/foreach}
</div>
<script src="/bower_components/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function (e) {

        $("#send").click(function (e) {
            var msg = $("#msg").val();
            var id = $(this).data("topic-id");
            appendMessage( { msg: msg, sender: "me" } );
            var options = {
                url: '/?action=chat',
                data: { topic_id: id, msg: msg },
                method: 'POST',
                dataType: 'json'
            };
            $.ajax(options).then(function (e) {
                console.log(e);
            });
        });

        $(".join").click(function (e) {
            var topic = $(this).data('topic');
            var topic_id = $(this).data('id');
            $("#send").data('topic-id', topic_id);
            $("#send").data('topic', topic);
            $("#title").html('"<i>' + topic + '</i>"');
            var options = {
                url: '/?action=msgs',
                data: { id: topic_id },
                method: 'POST',
                dataType: 'json'
            };
            $.ajax(options).then(function (e) {
                $("#msg-container").html("");
                $.each(e.msgs, function (k, v) { appendMessage(v); });
            });
        });
    });

    function appendMessage(v) {
        $("#msg-container").append("<p class='message'>" + v.sender + ': ' + v.msg + "</p>");
    }
</script>
</body>
</html>
