<script type='text/javascript'>
{literal}
	jQuery(function(e) {
		jQuery(".emtcons").click(function (e) {
			e.preventDefault();
			jQuery("#sms").val(jQuery("#sms").val() + jQuery(this).attr('data-text'));
			jQuery("#iconlist").fadeOut();
		});
		jQuery("#emtclose").click(function (e) {
			e.preventDefault();
			jQuery("#iconlist").fadeOut();
		});
	});
{/literal}
</script>
<a id='emtclose'><span>Close</span></a>
<ul class="container-emoticons">
{foreach from=$emoticons item=emoticon name=emoticons}
	<li>
    <a class="emtcons" data-text="{$emoticon.text_version}" href="#" title="{$emoticon.text_version}"><img src="../{$emoticon.image_path}" height="54" /></a>
    </li>
{/foreach}

<br class="clear" />
</ul>
