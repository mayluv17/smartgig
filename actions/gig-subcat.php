<?php

include "../config/db-connection.php";


$cid = $_GET['cat'];
$ct = mysqli_query($smartgig_con, "SELECT * FROM gigcat WHERE cat='$cid'") or die(mysqli_error($con));
if(mysqli_num_rows($ct)){
	echo '<select class="form-control" id="sel-subcat" name="subcat">';
while ($sc= mysqli_fetch_array($ct)){
	
	$subcats = explode (",",$sc['subcat'] );
	foreach ($subcats as $cat){
		$cat = trim($cat);
		echo "<option>$cat</option>";
		}
	
	
	}
echo '</select>';
}

?>


