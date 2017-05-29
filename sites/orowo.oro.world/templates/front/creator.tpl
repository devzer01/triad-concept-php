<div class="well well-lg" style="margin-top: -150px;">
    {#INTRO#}
    <div style="text-align: right">{#CREATOR#}</div>
</div>

{foreach from=$tops item=top}
<div class="channel-highlight">
    <h3 style="height: 50px;"><i>"{$top.topic}"</i></h3>
    <button class="btn join" id="{$top.id}" data-id="{$top.id}" data-topic="{$top.topic}">{#TAKEPART#}</button>
</div>
{/foreach}