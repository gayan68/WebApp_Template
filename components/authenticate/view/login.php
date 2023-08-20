<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Web App</title>

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
  
   	  <h1 style="position:relative; top:-40px;"><img height="84px" src="images/logo.png" /><br />Web App - Auth</h1>
    	<div id="login">
 	
<?php  	if(!isset($_GET['message'])){  print '<p class="tip">Please Enter your Username and Password!</p>';
    	  }else if($_GET['re']=='success')	print '<p class="tip">'.$_GET['message'].'</p>'; else 	print '<p class="error">'.$_GET['message'].'</p>';
?>              
    	  <form method="post" action="index.php?components=authenticate&action=login"  onsubmit="return generateLogIn()">
    	  <input type="hidden" id="token" value="<?php print $token; ?>" />
    	  <input type="hidden" id="onetime_pass" name="onetime_pass" />
    	 	<p><label><strong>Username</strong><input name="user_name" class="inputText" id="uname" type="text" /></label></p>
    	    <p><label><strong>Password</strong><input class="inputText" id="passwd" type="password" /></label></p>
      	    <input class="black_button" value="Authentification" style="width: 111px;" type="submit" />
            <label><input name="remember" id="remember" type="checkbox" />Remember me</label>       
            <br /><br /><br /><div><a href="index.php?components=authenticate&action=show_forgot_password" ><span style="color:gray">Forgot your username or password?</span></a></div>  
    	  </form>
    	</div>
        <div id="forgot">
        <a href="index.php?components=authenticate&action=show_new" class="forgotlink"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create New Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
        </div>
  </div>
</div>
<br clear="all">

</body></html>