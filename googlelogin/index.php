<?php
include_once("config.php");
include_once("includes/functions.php");

//print_r($_GET);die;

if(isset($_REQUEST['code'])){
	$gClient->authenticate();
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirectUrl, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	$userProfile = $google_oauthV2->userinfo->get();
	//DB Insert
	$gUser = new Users();
	$gUser->checkUser($userProfile['id'],$userProfile['family_name'],$userProfile['given_name'],'',$userProfile['email']);
	$_SESSION['google_data'] = $userProfile; // Storing Google User Data in Session
	$_SESSION['timage'] = $userProfile['picture'];
	$_SESSION['userid'] = $userProfile['id']; 
	$_SESSION['utype'] = 2;
	$_SESSION['login_m'] = 4;
	header("location: $sb/myaccount");
	$_SESSION['token'] = $gClient->getAccessToken();
} else {
	//$authUrl = $gClient->createAuthUrl();
}

/*if(isset($authUrl)) {
	echo '<a href="'.$authUrl.'"><img src="images/glogin.png" alt=""/></a>';
} else {
	echo '<a href="logout.php?logout">Logout</a>';
}*/

?>