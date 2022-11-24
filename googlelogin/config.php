<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '674048518298-2kh120lue1tnkk11irmm2shn7dkfcknv.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'WVLYhKL2r3j2LERCOPUykbtr'; //Google CLIENT SECRET
$redirectUrl = 'http://www.xircuitron.com/projects/smart/google-login';  //return url (url to script)
$homeUrl = 'http://www.xircuitron.com/projects/smart';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('Login to SmartGig');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>