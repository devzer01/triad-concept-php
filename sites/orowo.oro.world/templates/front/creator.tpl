<div class="well well-lg well-creator">
    {#INTRO#}
    <div style="text-align: right">{#CREATOR#}</div>
</div>

{foreach from=$tops item=top}
<div class="channel-highlight">
    <h3 class="front-window-topic">"{$top.topic}"</h3>
    <hr class="visible-xs mobile-gap" />
    <button class="btn join" id="{$top.id}" data-id="{$top.id}" data-topic="{$top.topic}">{#TAKEPART#}</button>
</div>
{/foreach}