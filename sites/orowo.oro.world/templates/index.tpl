{include file="top.tpl"}
<div class="col-md-12 hidden-xs" style="height: 200px;"></div>
<div class="col-xs-12 visible-xs" style="height: 50px;"></div>
{if $smarty.get.type eq "men"}
    {include file="front/men.tpl"}
{else}
    {include file="front/women.tpl"}
{/if}

{include file="bottom.tpl"}