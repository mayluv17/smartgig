<?php
include "../config/db-connection.php";
if(!$_SESSION['giginpro']):
echo "Session may be expired!";

else:
$_SESSION['step'] = 5;
$pics2post=$_POST['pics2post'];
$gguid=$_SESSION['giginpro'];
$uploadDir = '../img/gigpix/';
$now = time();


if($pics2post=='ppix1'){
$fileName = $_FILES['ppix1']['name'];
$tmpName = $_FILES['ppix1']['tmp_name'];
$fileSize = round($_FILES['ppix1']['size']/1024);
$fileType = $_FILES['ppix1']['type'];	
	}
elseif($pics2post=='ppix2'){
$fileName = $_FILES['ppix2']['name'];
$tmpName = $_FILES['ppix2']['tmp_name'];
$fileSize = round($_FILES['ppix2']['size']/1024);
$fileType = $_FILES['ppix2']['type'];
		}
elseif($pics2post=='ppix3'){
$fileName = $_FILES['ppix3']['name'];
$tmpName = $_FILES['ppix3']['tmp_name'];
$fileSize = round($_FILES['ppix3']['size']/1024);
$fileType = $_FILES['ppix3']['type'];
	}
		
else{ echo "unknown error 1"; exit;}





//$cap = md5($_POST['cap']);
if($fileSize > 2048):
echo "Sorry, only 2MB size is allowed!";
else:
$part = pathinfo($fileName);
$ext = substr(strrchr($fileName, "."), 1);
$ext = strtolower($ext);
$sext = array('jpg','jpeg','png','gif');
// make the random file name
if(in_array($ext,$sext)):
$randName = 'gp'.md5(rand() * time());
// and now we have the unique file name for the upload file
$filePath = $uploadDir.$randName . '.' . $ext;
move_uploaded_file($tmpName, $filePath);

$rid = (rand()*time().$gguid);

if($pics2post=='ppix1'){
$sql= mysqli_query($smartgig_con,"INSERT INTO pictures_ (userid, rid, description, filename, size, type, path, ext, utype, datetime) VALUES ('$gguid', '$rid', '', '$fileName', '$fileSize', '$fileType', '".str_replace('../','',$filePath)."', '$ext', '3', '$now')") or die (mysqli_error($smartgig_con));
}
elseif($pics2post=='ppix2'){
	$sql= mysqli_query($smartgig_con,"INSERT INTO pictures_ (userid, rid, description, filename, size, type, path, ext, utype, datetime) VALUES ('$gguid', '$rid', '', '$fileName', '$fileSize', '$fileType', '".str_replace('../','',$filePath)."', '$ext', '3', '$now')")
	or die (
	mysqli_error($smartgig_con)
	);
}
elseif($pics2post=='ppix3'){
	$sql= mysqli_query($smartgig_con,"INSERT INTO pictures_ (userid, rid, description, filename, size, type, path, ext, utype, datetime) VALUES ('$gguid', '$rid', '', '$fileName', '$fileSize', '$fileType', '".str_replace('../','',$filePath)."', '$ext', '3', '$now')")
	or die(
	mysqli_error($smartgig_con)
	);
}
else{
	echo "Unknown Error 2";
}
if($sql):
echo "uploaded::$filePath";
else:

echo "Please check internet connection";
endif;
else:
echo "Sorry, file type not supported!";
endif;
endif;
endif;
sleep(3);
?>