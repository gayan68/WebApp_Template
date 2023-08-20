<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>WebApp</title>

<link href="css/960.css" rel="stylesheet" type="text/css" media="all">
<link href="css/reset.css" rel="stylesheet" type="text/css" media="all">
<link href="css/text.css" rel="stylesheet" type="text/css" media="all">
<link href="css/login.css" rel="stylesheet" type="text/css" media="all">
<script src="js/md5.min.js"></script>
<script type="text/javascript" src="js/webapp.js"></script>
</head>


<body>

<div class="container_16">
  <div class="grid_6 prefix_5 suffix_5">
  
   	  <h1 style="position:relative; top:-40px;"><img height="84px" src="images/logo.png" /><br />WebApp</h1>
    	<div id="login">
 	
<?php  	if(!isset($_GET['message'])){  print '<p class="tip">Please Enter Your Registered Email Address,<br />So we can send you your username and password reset link!</p>';
    	  }else if($_GET['re']=='success')	print '<p class="tip">'.$_GET['message'].'</p>'; else 	print '<p class="error">'.$_GET['message'].'</p>';
?>     
	<?php if($_GET['action']=='show_forgot_password'){ ?>      
    	  <form method="post" action="index.php?components=authenticate&action=send_pw_reset">
    	 	<p><label><strong>Email Address</strong><input name="email" class="inputText" id="email" type="text" /></label></p>
      	    <input class="black_button" value="Send Link" style="width: 111px;" type="submit" />
      	    <br /><br />
    	  </form>
   <?php }else if($_GET['action']=='show_pwreset_form'){ ?>
    	  <form method="post" action="index.php?components=authenticate&action=reset_password&token=<?php print $_GET['token']; ?>" onsubmit="return validateNewPassword()">
    	    <input type="hidden" id="passhash" name="passhash" />
    	    <p><label><strong>New Password</strong><input class="inputText" id="user_pass1" type="password" /></label></p>
    	    <p><label><strong>Confirm Password</strong><input class="inputText" id="user_pass2" type="password" /></label></p>
      	    <input class="black_button" value="Reset Password" style="width: 111px;" type="submit" />
      	    <br /><br />
    	  </form>
   <?php } ?>
    	</div>
        <div id="forgot">
        <a href="index.php?components=authenticate&action=show_login" class="forgotlink"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Go Back to Login Page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
        </div>
  </div>
</div>
<br clear="all">

</body></html>