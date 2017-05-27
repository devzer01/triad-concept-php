<h2>Gift List</h2>
<table width="100%" border=0>
	<tr bgcolor="#2d2d2d" height="28px"><td>Gift Id</td><td>Gift</td><td>Coins</td><td>Date Added</td><td>Del</td></tr>
	{foreach from=$gifts item=gift name=gifts}
		<tr bgcolor="#{cycle values=fde6be,ccb691}">
			<td style='text-align: center;'><strong>{$gift.id}</strong></td>
			<td><img src="../{$gift.image_path}" /></td>
			<td>{$gift.coins}</td>
			<td>{$gift.created}</td>
			<td><a href="?action=admin_gifts&sub_action=del&id={$gift.id}">Delete</a></td>
		</tr>
	{/foreach}
</table>
<h2>Add New Gift</h2>
<form method='post' action='?action=admin_gifts&sub_action=upload' enctype="multipart/form-data">
	<strong>Category</strong> {html_options name=gift_category_id options=$gift_categories} <br/>
	<strong>Coins</strong> <input type='text' name='coins' /> <br/>
	<strong>Gift File</strong> <input type='file' name='gift' /> <br />
	<input type='submit' />
</form>