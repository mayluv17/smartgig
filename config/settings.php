<?php
error_reporting(0);
session_start();
//date_default_timezone_set('Africa/Lagos');

require_once("db-connection.php");

//predefined variables
$url = $scm = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
$url .= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$ur = str_replace('smart/','',$_SERVER['REQUEST_URI']);
$ur = split(' ',str_replace('?',' ',$ur));

$p = split('/',$ur[0]);
$page1 = $p[1];
$page2 = $p[2];
$page3 = $p[3];
$page4 = $p[4];
$page5 = $p[5];
$act = $_GET['act'];
$sec = $_GET['sec'];
$sitename = 'SmartGig';

$browser = $_SERVER['HTTP_USER_AGENT'];
$userid = $_SESSION['userid'];
$utype = $_SESSION['utype'];
$loginm= $_SESSION['login_m'];
$ip=$_SERVER['REMOTE_ADDR'];
$sb = $scm.$_SERVER['HTTP_HOST'].'/smart';

$now = time();

if($userid and $utype == 2):
	$sel = mysqli_query($smartgig_con,"SELECT * FROM users_ WHERE usid='$userid' AND type='2'");
	if($num = mysqli_num_rows($sel)):
	$uinfo = mysqli_fetch_array($sel);
	endif;
endif;


function sanitise_input($input){
	global $smartgig_con;
	$input = mysqli_real_escape_string($smartgig_con,$input);
	return trim($input);
}

function ppix($image){
	global $userid,$loginm;
	if($loginm == 1):
		return "";
	elseif($loginm == 2):
		return "//graph.facebook.com/$userid/picture?type=large";
	elseif($loginm == 3):
		return "$image";
	elseif($loginm == 4):
		return "$image";
	endif;
}
?>