<div class="well well-lg" style="margin-top: -150px;">
    <p>We are a collective of different belief systems and thought patterns</p>
    <p>This is a platform to communicate freely, so that we can understand what does it mean to be human.</p>
    <div style="text-align: right">Creator</div>
</div>

{foreach from=$tops item=top}
<div class="channel-highlight">
    <h3 style="height: 50px;"><i>"{$top.topic}"</i></h3>
    <button class="btn join" id="{$top.id}" data-id="{$top.id}" data-topic="{$top.topic}">Share View</button>
</div>
{/foreach}