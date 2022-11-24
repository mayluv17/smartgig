<?php
require 'dbconfig.php';
function checkuser($fuid,$ffname,$femail){
	$names = explode(' ',$ffname);
	$username = strtolower($names[1]);
    $check = mysql_query("select * from users_ where usid='$fuid'");
	$check = mysql_num_rows($check);
	if (empty($check)) { // if new user . Insert a new record	
	$query = "INSERT INTO users_ (type,usid,firstname,lastname,email,username,dat) VALUES ('2','$fuid','$names[1]','$names[0]','$femail','$username','".time()."')";
	mysql_query($query);	
	} else {   // If Returned user . update the user record		
	$query = "UPDATE users_ SET firstname='$names[1]', lastname='$names[0]', email='$femail', username='$username' where usid='$fuid'";
	mysql_query($query);
	}
}?>
