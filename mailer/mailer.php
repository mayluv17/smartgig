
<?php
if (isset($_REQUEST['email']))
	 {
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'] ;
		$comment = $_REQUEST['msg'] ;
		$phone = $_REQUEST['pone'] ;
		$ins= mail("duraconresources@gmail.com","Duracon Enquiry From:  $name . $phone" ,$comment, "From:" . $name);
		
	 }
		

		
		if($ins)
		{
		echo "ok";	
		}
		
		else{
			echo 'ERROR: unable to send enquiry, you can reach us by mail or phone ';			
		}?>