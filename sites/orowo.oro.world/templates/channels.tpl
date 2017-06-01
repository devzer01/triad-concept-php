{include file="top.tpl"}
<hr style="margin-top: 10px;" />
<div class="col-sm-5 col-xs-12 chat-container-left">
    <div class="col-sm-12 col-xs-12 speak">
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
            <button id="send" data-topic-id="{$channel.id}">{#EXPRESS#}</button>
        </div>
    </div>
</div>
<div class="col-sm-7 col-xs-12" style="float: right;margin-top: 30px;background-color: gray;padding: 10px;text-align: right;opacity: 0.8; min-height: 610px">
{foreach name=chn from=$channels item=channel}
    <div class="col-sm-3 col-xs-6 channel-portal grad{{math equation="x % 3" x=$smarty.foreach.chn.index}}">
        <h3>"{$channel.topic}"</h3>
        <hr class="visible-xs"/>
        <button class="btn join" id="{$channel.id}" data-id="{$channel.id}" data-topic="{$channel.topic}">{#TAKEPART#}</button>
    </div>
{/foreach}
</div>
{include file="bottom.tpl"}