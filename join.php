<br>
<br>
<br>
<br>
<?php
/*if($page2 == 'forgot-password'):
echo 'retrieve password';
else:
echo 'login';
endif*/
?>
<div class="container">
<div class="panel panel-default login-wrap join-wrap">
<div class="panel-heading text-center">
<h4>Join Smartgig</h4>
<small></small>
</div>
<div class="panel-body">
<?
if($userid):
//echo "<div class=\"alert alert-danger\" role=\"alert\">Logged out</div>";
session_destroy();
endif;

if(isset($_POST['submit'])):
$email = sanitise_input($_POST['email']);
$username = sanitise_input($_POST['username']);
$fname = sanitise_input($_POST['firstname']);
$lname = sanitise_input($_POST['lastname']);
$pass1 = sanitise_input($_POST['password']);
$pass2 = sanitise_input($_POST['repassword']);
$pv1 = $_POST['prove'];
$pv2 = $_POST['pvalue'];

if(!$email || !$username || !$pass1 || !$pass2 || !$fname || !$lname):
echo '<div class="alert alert-danger" role="alert">All contents are required.</div>';

elseif($pass1 != $pass2):
echo '<div class="alert alert-danger" role="alert">Password and confirm password must be the same</div>';

elseif(substr_count($email,'@')>1):
echo '<div class="alert alert-danger" role="alert">Sorry, only one email is required for registration!</div>';

elseif(! @eregi('^[0-9a-z_]+'.'@'.'([0-9a-z-]+\.)+'.'([0-9a-z]){2,4}$', $email)):
echo '<div class="alert alert-danger" role="alert">Sorry, your e-mail is not valid!</div>';

elseif(mysqli_num_rows(mysqli_query($smartgig_con,"SELECT * FROM users_ WHERE email='$email'"))):
echo '<div class="alert alert-danger" role="alert">Sorry, you are already registered!</div>';

elseif(mysqli_num_rows(mysqli_query($smartgig_con,"SELECT * FROM users_ WHERE username='$username'"))):
echo '<div class="alert alert-danger" role="alert">Username already used!</div>';

/*elseif($pv1 != $pv2):
echo '<div class="alert alert-danger" role="alert">Sorry, your capcha is incorrect!</div>';*/

else:
$string = substr(uniqid(rand()*time()),0,6);
if(mysqli_query($smartgig_con,"INSERT INTO users_ VALUES ('', '2', '$string', '$fname', '$lname', '$email', '$username', '$pass2', '', '$now')")):

$messages1 = '<html>
<body>
<table width="100%" style="border:0px solid #000000; -moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;" border="0" cellpadding="0" cellspacing="0">
<tr valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
<td width="178" height="47" style="border-bottom:3px solid #0099FF; background-color:'.$title_bg_color.'; padding:5px">
<img src="'.$sb.'/images/logo.png" width="160" alt="SmartGig"></td>
<td align="right" valign="bottom" style="border-bottom:3px solid #0099FF; padding-right:5px; font-size:18px; background-color:'.$title_bg_color.'; color:#FFFFFF">Registration Successful!</td>
</tr>
<tr valign="top">
<td style="font-family:Arial, Helvetica, sans-serif; padding:15px" colspan="2">'
."
<br />
<br />
Dear <b>$fname</b>, <br />
This is to confirm that your registration on SmartGig was successfully completed.<br /><br />
<div stystyle=\"float:right\">$qr_code</div>
Login detail:
<br />
Email: $email<br />
Username: $username<br>
Password: As chosen during registration
<br>
<br>
Thanks for chosing <b>SmartGig</b>.<br /><br />
Sincerely,<br />
SmartGig Team.
</td></tr>
</table>
</body>
</html>";

// Your subject 
$subjects="Registration Successful"; 

// From 
$headers = "FROM: SmartGig <dontreply@smartgig.com>\r\n"; 
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($email,$subjects,$messages1,$headers);
echo "<script type=\"text/javascript\">alert('Registration successful.');window.location='signin';</script>";

else:
echo '<div class="alert alert-danger" role="alert">Registration error. '.mysqli_error($smartgig_con).'</div>';
endif;

endif;
endif;

$mt1 = mt_rand(10,50);
$mt2 = mt_rand(51,99);
$mt3 = "$mt1+$mt2";
?>
<form id="" class="form-signup" method="POST" action="" >

     <div class="step-1 steps">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>

        <!--<button class="btn btn-lg btn-default btn-block btn-joinsub" id="sub-1">join</button> -->

        </div><br>

 <div class="step-2 steps">
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Username" name="username" required>
       
      
        <!--<button class="btn btn-lg btn-default btn-block btn-joinsub" type="submit" id="sub-2">Next</button>-->
       
        </div><br>

        
 <div class="step-3 steps">
        <label for="Password" class="sr-only">Password</label>
        <input type="password" id="Password" class="form-control" placeholder="Password" name="password" required><br>

        <input type="password" id="rePassword" class="form-control" placeholder="Retype Password" name="repassword" required >
        <br>
<label for="inputFName" class="sr-only">First name</label>
        <input type="text" id="inputFName" class="form-control" placeholder="First name" name="firstname" required>
        <br>
<label for="inputLName" class="sr-only">Last name</label>
        <input type="text" id="inputLName" class="form-control" placeholder="Last name" name="lastname" required>
       
      
        <input class="btn btn-lg btn-default btn-block btn-joinsub" type="submit" id="sub-3" value="Join Us Now" name="submit" />
       
        </div>
                     
       <button class="btn btn-lg btn-default btn-block" type="submit" id="loading" disabled style="display: none;"><span class="glyphicon"> <img src="img/spinner9.png" width="16"> Wait..</span></button>          
        <div class="text-center" id="agree">By joining I agree to receive emails from Smartgig</div>
          <div class="form-div"><span>with</span></div>
        <div class="log-social-wrap text-center">
        <div class="col-xs-4 social-login"><div class="icn-fb"><img src="img/facebook.png" /></div></div>
        <div class="col-xs-4 social-login"><div class="icn-gg"><img src="img/google.png" /></div></div>
        <div class="col-xs-4 social-login"><div class="icn-in"><img src="img/linkedin2.png" /></div></div>
        </div>
        
      </form>

      
</div>
<div class="panel-footer">
Dont't have an account? <a href="join">Join</a>
</div>
</div>
</div>
<link rel="stylesheet" href="css/join-sign.css" type="text/css" />