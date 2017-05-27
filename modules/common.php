<?php 

$female = DBconnect::assoc_query_2D("SELECT username, id, picturepath FROM member WHERE gender=2 AND isactive=1 AND fake=1 AND id>3 AND picturepath!=''");
$male = DBconnect::assoc_query_2D("SELECT username, id, picturepath FROM member WHERE gender=1 AND isactive=1 AND fake=1 AND id>3 AND picturepath!=''");

$random_contacts = array_merge($female, $male);
$smarty->assign("random_contacts", $random_contacts);
$smarty->assign("newest_members", $random_contacts);
$smarty->assign("online_members", $random_contacts);


if (!isset($_SESSION['sess_id'])) return;

//only execute this code when a user is logged in;
$userid = $_SESSION['sess_id'];

$profile = funcs::getProfile($userid);	//get profile data

$searchGender = ($profile['gender'] == 1) ? 2 : 1;

$random_contacts = DBconnect::assoc_query_2D("SELECT username, id, picturepath FROM member WHERE gender=" . $searchGender . " AND isactive=1 AND fake=1 AND id>3 AND picturepath!='' ORDER BY RAND() LIMIT " . RANDOM_CONTACTS);
$smarty->assign("random_contacts", $random_contacts);

$sql = "SELECT username, id, picturepath FROM member WHERE gender=2 AND isactive=1 AND fake=1 AND id>3 ORDER BY RAND() LIMIT 1";
$rs = mysql_query($sql);
$smarty->assign('random_profile', mysql_fetch_assoc($rs));


$phototemp = DBConnect::retrieve_value("SELECT picturepath FROM phototemp WHERE userid=".$userid." AND status=1 ORDER BY id DESC LIMIT 1");
if($phototemp && ($profile['picturepath']==''))
{
	$profile['picturepath'] = $phototemp;
	$profile['approval'] = 1;
}
$profile['gender'] = funcs::getAnswerChoice($_SESSION['lang'],'', '$gender', $profile['gender']);
$profile['country'] = funcs::getAnswerCountry($_SESSION['lang'], $profile['country']);
$profile['state'] = funcs::getAnswerState($_SESSION['lang'], $profile['state']);
$profile['city'] = funcs::getAnswerCity($_SESSION['lang'], $profile['city']);

$smarty->assign('memberProfile', $profile);

//Get new messages's contact
$sql = "SELECT m.username, m.id, m.picturepath, i.datetime, i.status "
     . "FROM message_inbox i LEFT "
     . "JOIN member m ON i.from_id=m.id WHERE i.to_id=".$_SESSION['sess_id'] . " AND m.username IS NOT NULL AND m.id>3 GROUP BY m.username ORDER BY i.datetime DESC LIMIT " . RECENT_CONTACTS;

echo $sql; exit;

$recent_contacts = DBconnect::assoc_query_2D($sql);
$smarty->assign("recent_contacts", $recent_contacts);

//favorites 
$favorites = DBConnect::assoc_query_2D("SELECT m.username, m.picturepath FROM favorite f LEFT JOIN member m ON f.child_id=m.id WHERE m.isactive=1 AND f.parent_id=".$_SESSION['sess_id']." ORDER BY f.id DESC");
$smarty->assign('favorites', $favorites);

$member = DBConnect::assoc_query_1D("SELECT * FROM member WHERE id = " . $userid);
$smarty->assign('sitemember', $member);


// User Gifts
$user_id = $_SESSION['sess_id'];
$group = "";

if (isset($_GET['user_id']) && $_GET['user_id'] > 0) {
	$user_id = $_GET['user_id'];
	$group = " GROUP BY g.id";
} 

if (isset($_GET['username']) && trim($_GET['username']) != "") {
	$user_id = funcs::getUserid($_GET['username']);
	$group = " GROUP BY g.id";
}

$sql = "SELECT mg.*, g.*, ms.username AS sender FROM member_gift AS mg "
     . "LEFT JOIN gift AS g ON g.id = mg.gift_id "
     . "LEFT JOIN member AS ms ON ms.id = mg.sender_id "
     . " WHERE mg.member_id = " . $user_id . " " . $group;

$rs = mysql_query($sql);

$gifts = array();

if($rs)
{
	while ($r = mysql_fetch_assoc($rs)) {
		$gifts[] = $r; 
	}

	$smarty->assign('gifts', $gifts);
}

/**
 * All gifts
 */
$gifts = array();
$sql = "SELECT * FROM gift WHERE status = 1";
$rs = mysql_query($sql);
if($rs)
{
	while ($r = mysql_fetch_assoc($rs)) {
		$gifts[] = $r;
	}
	$smarty->assign('list_gifts', $gifts);
}

/**
 * User's gifts
 */
$sql = "SELECT mg.*, g.*, ms.username AS sender, ms.picturepath, COUNT( * ) AS times FROM `member_gift` AS mg "
     . "LEFT JOIN `gift` AS g ON g.id = mg.gift_id "
     . "LEFT JOIN `member` AS ms ON ms.id = mg.sender_id "
     . "WHERE mg.member_id = " . $user_id . " GROUP BY g.id, mg.sender_id "
     . "ORDER BY `mg`.`created` DESC,`times` DESC LIMIT 6";
$rs = mysql_query($sql);
if($rs)
{
	$gifts = array();
	$aaa = array();
	while ($r = mysql_fetch_assoc($rs)) {
		if(!in_array($r['gift_id'], $aaa)){
			$aaa[] = $r['gift_id'];
			$gifts[] = $r; 
		}
	}
	$smarty->assign('user_gifts', $gifts);
}

$already_topup = DBConnect::retrieve_value("SELECT 1 FROM purchases_log WHERE user_id = ".$own_id." AND purchase_finished=1 LIMIT 1");
$smarty->assign('already_topup', $already_topup);
