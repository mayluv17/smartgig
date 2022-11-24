<?
$title_bg_color = '#C00000';
//$qr_code = "<img src=\"$sb/images/qr-code-image.png\" width=\"200\" />";
//look store pagename from address
$get1 = mysqli_query($smartgig_con,"SELECT * FROM users_ WHERE username='$page1'");
if(mysqli_num_rows($get1)):
$val = mysqli_fetch_array($get1);


if($page2):
//find gig details
$gg = mysqli_query($smartgig_con,"SELECT * FROM peformances_ WHERE userid='$val[usid]' and giglink='$page2'");
if(mysqli_num_rows($gg)):
$gig = mysqli_fetch_array($gg);
$page_title = "$gig[gigtitle]";

else:
//header("location: ../$page1");
	if($page1 == 'myaccount'):
			/*if($userid and $utype == 2):
				if($page2 == 'bookings'):
					$page_title = "My Bookings";
				elseif($page2 == 'profile'):
					$page_title = "My Profile";
				elseif($page2 == 'change-password'):
					$page_title = "Change Password";
				else:
					$page_title = "$uinfo[firstname] $uinfo[lastname]";
				endif;
			
			else:
			$page_title = "Login to continue";
			endif;*/
	else:
	$page_title = "$sitename > $val[firstname] $val[lastname]";
	endif;
endif;
endif;


elseif($page1 == 'faqs'):
		$page_title = 'Frequently Asked Questions';
		//$app = ' class="current"';
		//$desc = '';
	elseif($page1 == 'join'):
		$page_title = 'Join SmartGig';
	elseif($page1 == 'signin'):
		if($page2 == 'forgot-password'):
			$page_title = 'Forgot Password';
		else:
			$page_title = 'Sign In to Your Account';
		endif;
	elseif($page1 == 'contact-us'):
		$page_title = 'Contact Us';
	elseif($page1 == 'privacy-policy'):
		$page_title = 'Privacy Policy';
	elseif($page1 == 'terms-and-conditions'):
		$page_title = 'TableRedi Terms and Conditions';
else:
$page_title = 'Welcome to SmartGig';
endif;
?>