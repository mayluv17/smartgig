<?php
include "../config/db-connection.php";
$userid = $_SESSION['userid'];
$_SESSION['step'] = $_POST["step"];

if(!$userid):
echo "<span style='display:none;'>ERROR:</span> Session expired, reload browser and login to try again.";

else:
$date_time = time();
$guid="";
$qr='';

if ($_POST["step"]==1){
$gigtittle = $_POST["gigtittle"];
$gigcat= $_POST['gigcat'];
$gigsubcat= $_POST['subcat'];
$genre= $_POST['genre'];
$tags= $_POST['tags'];

if (!$gigtittle || !$gigcat || !$tags){
	echo "<span style='display:none;'>ERROR:</span> All fields in this step is required";
	$error=1;
}


else{
$giglink = preg_replace('/[^A-Z-a-z0-9\040\-]/','',$gigtittle);
$giglink = str_replace(' ','-',strtolower($giglink));
$_SESSION['giglink'] = $giglink;

//if there is gig in progress
if(isset($_SESSION["giginpro"])){
$gguid=$_SESSION['giginpro'];


if(!$error){
   $qr= mysqli_query($smartgig_con,"UPDATE peformances_ set gigtittle='$gigtitle',gigcat='$gigcat',gigsubcat='$gigsubcat',genre='$genre',tags='$tags' WHERE guid='$gguid' and userid='$userid'");
}
else{echo "";}//else there is error
if($qr){	
echo "ok::okay isset";} // else{echo "unknown error";}
}
//if new gig
else{
$guid = substr(md5(time()), 0, 70);
if(!$error){
 $qr= mysqli_query($smartgig_con,"INSERT INTO peformances_ (guid, userid,giglink,gigtitle,gigcat,gigsubcat,genre,tags,datetime) 
values
('$guid','$userid','$giglink','$gigtittle','$gigcat','$gigsubcat','genre','$tags','$date_time')");
}

if($qr){	
echo "okay";		
$_SESSION['giginpro']=$guid;
$_SESSION['gig2pub']=$guid;
}

else{
	echo "unknown error";
}


} 
}
} //if step one ends



elseif ($_POST["step"]==2){
	
if ($_POST['basicprice']<5){
	echo "<span style='display:none;'><span style='display:none;'>ERROR:</span></span> Basic price should not be less than $5";
	$error=1;
}
else{
	$basicprice= $_POST['basicprice'];
}

$deltime= $_POST['deltime'];
$revision= $_POST['revision'];


//if Express deivery is checked 
if(isset($_POST["xtrafastchk"])){
	
if ($_POST['expressprice']<5){echo "<span style='display:none;'>ERROR:</span> Express price should not be less than $5"; $error=1;} else{$expressprice= $_POST['expressprice'];}
if ($_POST['expresstime']>=$deltime){echo "<span style='display:none;'>ERROR:</span> Express delivery time should be lesser than delivery time"; $error=1;} else{$expressprice= $_POST['expresstime'];}
	}else{
$expressprice= 0;
$expresstime= 0;
		}
		
//if additional revision is checked 		
if(isset($_POST["addrevchk"])){
if ($_POST['addrevprice']<5){echo "<span style='display:none;'>ERROR:</span> Revision price should not be less than $5"; $error=1;} else{$addrevprice= $_POST['addrevprice']; $addrevtime= $_POST['addrevtime'];}	
	}else{
$addrevprice= 0;
$addrevtime= 0;}


//if project file is checked
if (isset($_POST["projfilchk"])){
if ($_POST['projfileprice']<5){echo "<span style='display:none;'>ERROR:</span> Project file price should not be less than $5"; $error=1;} else{$projfileprice= $_POST['projfileprice'];}	
	}

if (isset($_POST["addpefchk"])){
if ($_POST['extraprice']<5){echo "<span style='display:none;'>ERROR:</span> Extra Performance price should not be less than $5"; $error=1;} else{
	$extratitile= $_POST['extratitile'];
$extradesc= $_POST['extradesc'];
$extraprice= $_POST['extraprice'];
$extratime= $_POST['extratime'];
																}	
	} else {
$extratitile=0;
$extradesc=0;
$extraprice=0;
$extratime=0; } //else additional performance not check

if(isset($_SESSION["giginpro"])){
$gguid=$_SESSION['giginpro'];
if(!$error){
 $qr= mysqli_query($smartgig_con,"UPDATE peformances_ set basicprice='$basicprice',deltime='$deltime',revision='$revision',expressprice='$expressprice',expresstime='$expresstime',addrevprice='$addrevprice',addrevtime='$addrevtime',projfileprice='$projfileprice',extratitile='$extratitile',extradesc='$extradesc',extraprice='$extraprice',extratime='$extratime' WHERE guid='$gguid' and userid='$userid'");
}
else{}//else there is error
if($qr){	
echo "ok::okay isset";}  
}

}


//if step 2 ends
elseif ($_POST["step"]==3){
$gigdesc=mysqli_real_escape_string($smartgig_con,$_POST['gigdesc']);
//$count = str_word_count($gigdesc);
//$count = strlen(strip_tags(nl2br($gigdesc)));
$count = strlen(str_replace('\r\n', '', $gigdesc));

if ($count<120){echo "<span style='display:none;'>ERROR:</span> Minimum of 120 characters is required in your performance description "; $error=1;}
elseif ($count>1200){echo "<span style='display:none;'>ERROR:</span> Maximum of 1200 characters is required in your performance description"; $error=1;}
else{

if(isset($_SESSION["giginpro"])){
$gguid=$_SESSION['giginpro'];
if(!$error){

 $qr= mysqli_query($smartgig_con,"UPDATE peformances_ set gigdesc='$gigdesc' WHERE guid='$gguid' and userid='$userid'") or die (mysqli_error($smartgig_con));
}
else{}//else there is error
if($qr){	
echo "ok::okay isset";}  else{echo"<span style='display:none;'>ERROR:</span> ";}
}

}

}// step 3

// step 4 begins
elseif ($_POST["step"]==4){

$requir=mysqli_real_escape_string($_POST['requir']);
$requiredfile=$_POST['requiredfile'];

if(isset($_SESSION["giginpro"])){
$gguid=$_SESSION['giginpro'];
if(!$error){
 $qr= mysqli_query($smartgig_con,"UPDATE peformances_ set requir='$requir',requiredfile='$requiredfile' WHERE guid='$gguid' and userid='$userid'");// or die (mysqli_error($smartgig_con));
}
else{}//else there is error
if($qr){	
echo "ok::okay isset";}  else{echo"<span style='display:none;'>ERROR:</span> ";}
}
}

///step 5 form session is ended here
elseif ($_POST["step"]==5){
	$cnt = count($_POST['link']);
	for($i=0;$i<$cnt;$i++){
		$lnk = $_POST['link'][$i];
		if($lnk):
		$qr= mysqli_query($smartgig_con,"INSERT INTO peformance_links_ VALUES ('','$gguid', '$lnk', '$date_time')");
		endif;
	}
	
	if($qr){	
		echo "ok::okay isset::";
		//unset($_SESSION['giginpro']);
	}
		else{
			echo"<span style='display:none;'>ERROR:</span> no link received ".mysqli_error($smartgig_con);
	}
}
/*$ytubelink= mysqli_real_escape_string($smartgig_con,$_POST['ytubelink']);
$vimeolink= mysqli_real_escape_string($smartgig_con,$_POST['vimeolink']);
$soundcloudlink= mysqli_real_escape_string($smartgig_con,$_POST['soundcloudlink']);

$beatportlink= mysqli_real_escape_string($smartgig_con,$_POST['beatportlink']);
$ituneslink= mysqli_real_escape_string($smartgig_con,$_POST['ituneslink']);
$otherlink= mysqli_real_escape_string($smartgig_con,$_POST['otherlink']);


if(isset($_SESSION["giginpro"])){
$gguid=$_SESSION['giginpro'];
if(!$error){
 $qr= mysqli_query($smartgig_con,"UPDATE peformances_ set ytubelink='$ytubelink',vimeolink='$vimeolink',soundcloudlink='$soundcloudlink',beatportlink='$beatportlink',ituneslink='$ituneslink',otherlink='$otherlink' WHERE guid='$gguid' and userid='$userid'") or die (mysqli_error($smartgig_con));
}
else{}//else there is error
if($qr){	
echo "ok::okay isset";
unset($_SESSION['giginpro']);}  else{echo"<span style='display:none;'>ERROR:</span> ";}
}
}*/


///step 6 is the publish stage
elseif ($_POST["step"]==6){

if(isset($_SESSION["gig2pub"])){
$gguid=$_SESSION['gig2pub'];  //// gig2pub session is used to publish the gig
if(!$error){
 $qr= mysqli_query($smartgig_con,"UPDATE peformances_ set status='1' WHERE guid='$gguid' and userid='$userid'") or die (mysqli_error($smartgig_con));
}
else{}//else there is error
if($qr){	
echo "ok::okay isset";
unset($_SESSION['gig2pub']);}  else{echo"<span style='display:none;'>ERROR:</span> ";}
}
}


else{
	echo "<span style='display:none;'>ERROR:</span> Unknown error";
}



//unset ($_SESSION['giginpro']);

endif;
?>