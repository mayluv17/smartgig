<?php
include("config/settings.php");
require_once("config/title.php");
if($page1 == 'signout'):
require_once("signout.php");
exit;
elseif($page1 == 'fblogin'):
require_once("facebooklogin/fbconfig.php");
exit;
elseif($page1 == 'twitter-login'):
require_once("twitterlogin/process.php");
exit;
elseif($page1 == 'google-login'):
require_once("googlelogin/index.php");
exit;
endif;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><? echo($page_title); ?></title>
<base href="<?php echo($sb); ?>/" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/create-gig.css" />
<link rel="stylesheet" href="css/extra-css.css" />
<link rel="stylesheet" href="assets/bootstrap-tagsinput.css" />
<link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="assets/bootstrap-tagsinput.js"></script>
<script src="js/overall.js" type="text/javascript"></script>
<script src="js/gig-form.js" type="text/javascript"></script>
<script src="assets/js/flipclock.min.js"></script>
<script src="assets/js/tinymce/tinymce.min.js"></script>
<script src="js/extra-js.js" type="text/javascript"></script>
</head>

<body>
<div class="alert alert-danger form-err"><span class="glyphicon glyphicon-alert"></span> <div id="error-drop"></div></div>
<div class="alert alert-success upload-success"><span class="glyphicon glyphicon-alert"></span> <div id="">Picture Uploaded</div></div>

<?php
if($userid and $utype == 2):
include "includes/top-nav2.php";
else:
include "includes/top-nav.php";
endif;

if($page1):
//look store pagename from address
if($val['username']):
include("userfiles/index.php");


else:
	if(file_exists("$page1.php")):
	include("$page1.php");
	else:
	include("error-404.php");
	endif;
endif;

else:
include("home.php");
endif;

include "includes/footer.php";
?>
</body>
</html>

