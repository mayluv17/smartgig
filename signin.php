<br>
<br>
<br>
<br>
<div class="container">
<div class="panel panel-default login-wrap">
<div class="panel-heading text-center">
<h4><? echo($page_title); ?></h4>
<small></small>
</div>
<div class="panel-body">
<? if($page2 == 'forgot-password'):

$e = $_GET['e'];
$h = $_GET['h'];
$u = $_GET['u'];

if($e and $h):
if(!mysqli_num_rows(mysqli_query($smartgig_con,"SELECT * FROM users_ WHERE email='$e' and hash='$h'"))):
echo "<div class=\"alert alert-danger\">
* <strong>The email/code on the address is invalid!</strong>
<br />
<em>Possible causes:</em>
<br />
<ol class='line'>
<li>You have used the code in the address bar to change your password before.</li>
<li>The email that appears on the address bar is not associated with the code.</li>
<li>The code itself is not valid and/or expired.</li>
</ol>
<center><a class='btn small danger' href='$sb/signin/lost-password'>Resend Code</a> <a class='btn small info' href='$sb'>Return to Homepage</a></center>
<br />
</div>";

else:
if(isset($_POST['send'])):
$date = date('d/m/Y');
$date2 = date('Y/m/d');
$time = date('h:iA');

$p1 = sanitise_input($_POST['p1']);
$p2 = sanitise_input($_POST['p2']);

$msg = '';
$error = '';
if(!$p1):
$msg .= "* You must enter a login password";
$error = "o";

elseif( !preg_match('/(?=.*[a-z])(?=.*[0-9]).{6,}/i', $p1) || strlen( $p1) < 6):
$msg .= "* Password must contain numbers and letters and 6 chracters minimum";
$error = "o";

elseif(!strcmp($p1,$p2) == 0):
$msg .= "* Your passwords do not match";
$error = "o";
endif;

if($error):
echo "<div class=\"alert alert-danger\">$msg</div>";

else:
if(mysqli_query($smartgig_con,"UPDATE users_ SET password='$p2' WHERE email='$e' and hash='$h'")):
mysqli_query($smartgig_con,"UPDATE users_ SET hash='' WHERE email='$e' and hash='$h'");
echo "<script>";
echo "alert('Password changed!');";
echo "location='$sb/signin'";
echo "</script>";

else:
echo "<script>";
echo "alert('Error changing your password, try again!');";
echo "location='$url'";
echo "</script>";
echo $msg = "<div class=\"alert alert-danger\">* Error changing your password, try again!</div>";
endif;
endif;
endif;
?>
<form method="post" action="<? $_SERVER['PHP_SELF'];?>">
<input type="hidden" name="action" value="reset" />

  <p>New Password
    <input type="password" name="p1" style="width:98%" value="" />
  </p>
  
  <p>Re-type New Password
    <input type="password" name="p2" style="width:98%" value="" />
  </p>

  
  <p align="center">
    <input type="submit" value="Change Password" class="btn primary small" name="send">
  </p>

</form>
<?
endif;

else:
if(isset($_POST['send'])):
$usname = $_POST['email'];

if(!$usname):
echo $msg = "<div class=\"alert alert-danger\">* Your registered email is required!</div>";
else:
$sel=mysqli_query($smartgig_con,"SELECT * FROM users_ WHERE email='$usname'");
if(mysqli_num_rows($sel) == 1):
$get=mysqli_fetch_array($sel);
$code = uniqid(rand()*time());
$name = "$get[firstname]";
$messages1 = '<html>
<body>
<table width="700" style="border:0px solid #000000; -moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;" border="0" cellpadding="0" cellspacing="0">
<tr valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
<td width="178" height="47" style="border-bottom:3px solid #0099FF; background-color:#0066CC; padding:5px">
<img src="'.$sb.'/images/logo.png" width="160" alt="SmartGig"></td>
<td align="right" valign="bottom" style="border-bottom:3px solid #0099FF; padding-right:5px; font-size:18px; background-color:#0066CC; color:#FFFFFF">Password Reset Request!</td>
</tr>
<tr valign="top">
<td style="font-family:Arial, Helvetica, sans-serif; padding:15px" width="500">'
."
<br />
<br />
Dear <b>$name</b>, <br />
Recently, a request was submitted to reset your password for our users area. If you did not request this, please ignore this email. It may be system error.<br /><br />

Follow the link below to reset your password.
<br />
<a href=\"$sb/signin/forgot-password?e=$usname&h=$code\">$sb/signin/lost-password?e=$usname&h=$code</a>
<br>
<br>
Thanks for using <b>SmartGig</b>.<br /><br />
Sincerely,<br />
SmartGig Team.
<br />
<br />
----------------------------------------------------------------------------
<br />
(If clicking the URLs in this message does not work, copy and paste them
into the address bar of your browser).
</td></tr>
</table>
</body>
</html>";
$to=$usname; 

// Your subject 
$subjects="Password Reset Request"; 

// From 
$headers = "FROM: SmartGig <dontreply@smartgig.com>\r\n"; 
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
if(mysqli_query($smartgig_con,"UPDATE users_ SET hash='$code' WHERE email='$usname'")):
mail($to,$subjects,$messages1,$headers);
echo "<script>";
echo "alert('An email has been sent to the address you provided. Folow the link in the mail message');";
echo "location='$sb/signin'";
echo "</script>";
else:
echo $msg = "<div class=\"alert alert-danger\">* Error sending the mail, try again!</div>";
endif;
else:
echo $msg = "<div class=\"alert alert-danger\">* The email you have provided cannot be found in our users record!</div>";
endif;
endif;
endif;
?>
<p>If you have forgotten your password, you can reset it here. When you fill in your registered email address, a PIN will be sent to you via email to reset your passwrd.</p>

<br>
<form class="form-horizontal" method="post">
<input type="email" name="email" class="form-control input-lg" id="inputEmail3" placeholder="Email">
<br>
<input type="submit" class="btn btn-primary  btn-lg" name="send" value="Send me password reset link" />
</form>
<br />
<? endif;



else:

if(isset($_POST['login'])):
$username = $_POST['email'];
$password = $_POST['password'];
if(!$username or !$password):
$msg = "<div class=\"alert alert-danger\" role=\"alert\">Enter username and password!</div>";
else:
$get=mysqli_query($smartgig_con,"SELECT * FROM users_ WHERE (username='$username' or email='$username') AND password='$password' and type='2'");
if(mysqli_num_rows($get)==1):
$user=mysqli_fetch_array($get);

$_SESSION['userid']=$user['usid'];
$_SESSION['utype'] =$user['type'];
$_SESSION['login_m'] = 1;

$goto = ($_GET['return']) ? "$_GET[return]" : "$sb/$user[username]";
$msg = '<div class="alert alert-success" role="alert">Logged in...</div>';
echo "<meta http-equiv=\"refresh\" content=\"0; URL=$goto\" />";
exit;
else:
$msg = "<div class=\"alert alert-danger\" role=\"alert\">Login details invalid, try again!</p></div>";
endif;
endif;
endif;
echo $msg;

if($_SESSION['signedout'] == 1):
echo "<div class=\"alert alert-danger\" role=\"alert\">Logged out</div>";
session_destroy();
endif;
include("googlelogin/config.php");
?>
<form id="login_form" class="form-signin" method="POST">

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Email address or Usename" name="email" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        <div class="checkbox">
          <label style="font-size: 12px;">
            <input type="checkbox" value="remember-me"> Remember me
          </label>
           <a style="font-size: 12px; float: right" href="signin/forgot-password">
           Forgot Password? 
          </a>
        </div>
     
        <input class="btn btn-lg btn-default btn-block" type="submit" id="signIn" value="Sign in" name="login">
        <button class="btn btn-lg btn-default btn-block" type="submit" id="loading" disabled style="display: none;"><span class="glyphicon"> <img src="img/spinner9.png" width="28"> Wait..</span></button>
           <div class="form-div"><span>with</span></div>
        <div class="log-social-wrap text-center">
        <div class="col-xs-4 social-login"><a href="./fblogin" title="Login with facebook"><div class="icn-fb"><img src="img/facebook.png" /></div></a></div>
        <div class="col-xs-4 social-login"><a href="<? echo($gClient->createAuthUrl()); ?>"><div class="icn-gg"><img src="img/google.png" /></div></a></div>
        <div class="col-xs-4 social-login"><a href="./twitter-login" title="Login with twitter"><div class="icn-in"><img src="img/twitter.png" /></div></a></div>
        </div>
      </form>
<?
endif;
?>
      
</div>
<div class="panel-footer">
Dont't have an account? <a href="join">Join</a>
</div>
</div>
</div>
<link rel="stylesheet" href="css/join-sign.css" type="text/css" />