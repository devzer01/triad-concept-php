<!-- {$smarty.template} -->
{if !$smarty.session.sess_externuser}
<form id="qsearch_form" name="qsearch_form" method="post" action="proc_from.php?from=./?action=search&amp;card={$card}" >
<div style="float:left;">
    <span class="check-box"><input name="q_forsearch" type="radio" value="1" {if $smarty.session.right_search.q_forsearch eq 1}checked="checked"{/if} style=" background:none;"/><strong>{#Lonely_heart_ads#}</strong></span>
    
    <span class="check-box"><input name="q_forsearch" type="radio" value="2" {if $smarty.session.right_search.q_forsearch neq 1}checked="checked"{/if} style=" background:none;"/><strong>{#Profile#}</strong></span>
   
	
    <br class="clear" />
    <label class="quicktext">{#Gender#}</label>
    <span>    
    <select  name="q_gender" id="q_gender" class="input-quick-select">
    <option value="">{#Any#}</option>
    {html_options options=$gender selected=$smarty.session.right_search.q_gender} 
    </select>
    </span>
    <br class="clear" />
    
    <label class="quicktext">{#Have_Photo#}</label>
    <span>
    <select name="q_picture" id="q_picture" class="input-quick-select">
    {html_options options=$picyesno selected=$smarty.session.right_search.q_picture}  
    </select>
    </span>
    <br class="clear" />
    
    <label class="quicktext">{#Country#}</label>
    <span>
    <select id="q_country" name="country" onchange="loadOptionState('q_state', this.options[this.selectedIndex].value, '');loadOptionCity('q_city', $('q_state')[$('q_state').selectedIndex].value, '')" class="input-quick-select"><option></option></select>
    </span>
    <br class="clear" />
    
    <label class="quicktext">{#State#}</label>
    <span>
    <select id="q_state" name="state" onchange="loadOptionCity('q_city', this.options[this.selectedIndex].value, '')" class="input-quick-select"><option></option></select> 
    </span>
    <br class="clear" />
    
    <label class="quicktext">{#City#}</label>
    <span>
    <select id="q_city" name="city" class="input-quick-select"><option></option></select>
    </span>
    <br class="clear" />
    
    <script language="javascript" type="text/javascript">
	{if ($smarty.session.right_search.country neq "") or ($smarty.session.right_search.country neq 0)}
		q_country_select = {$smarty.session.right_search.country};
	{/if}

	{if ($smarty.session.right_search.state neq "") or ($smarty.session.right_search.state neq 0)}
		q_state_select = {$smarty.session.right_search.state};
	{/if}

	{if ($smarty.session.right_search.city neq "") or ($smarty.session.right_search.city neq 0)}
		q_city_select = {$smarty.session.right_search.city};
	{/if}
	
	{literal}
		ajaxRequest("loadOptionCountry", "", "", "q_loadOptionCountry", "reportError");
		
		var Opt = Array();
		function clickInOpt(obj){
			Opt[obj.name] = obj.value; 
		}

		function clickOutOpt(obj){
			Opt[obj.name] = ""; 
			obj.checked=false;
		}

		function chkOpt(obj){
			if(obj.value==Opt[obj.name]){ 
				clickOutOpt(obj); 
			}else{
				clickInOpt(obj); 
			}
		}
	{/literal}
</script>
    
    <label class="shottext" style="width:80px !important;">{#Age#}</label>
    <span>
    {if $smarty.session.right_search.q_minage neq ""}
    {assign var="select_q_minage" value=$smarty.session.right_search.q_minage}
    {else}
    {assign var="select_q_minage" value=18}
    {/if}
    <select name="q_minage" id="q_minage" onchange="ageRange('q_minage', 'q_maxage')" class="input-quick-select02">
    {html_options options=$age selected=$select_q_minage}  
    </select>
    </span>
    
    <label class="shottext" style="margin-left:8px; margin-right:8px;">{#To#}</label>
    <span>
    {if $smarty.session.right_search.q_maxage neq ""}
    {assign var="select_q_maxage" value=$smarty.session.right_search.q_maxage}
    {else}
    {assign var="select_q_maxage" value=$select_q_minage+2}
    {/if}
    <select name="q_maxage" id="q_maxage" class="input-quick-select02">
    {html_options options=$age selected=$select_q_maxage}  
    </select>
    </span>
</div>
<div style="float:left; padding:0 auto; margin:5px 0;">
<a href="#" onclick="document.getElementById('qsearch_form').submit(); return false;" class="btn-regiter">{#Search#}</a>
</div>
</form>
<script language="javascript" type="text/javascript">ageRange('q_minage', 'q_maxage');</script>
{/if}









