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
  
   	  <h1 style="position:relative; top:-40px;"><img height="84px" src="images/logo.png" /><br />WebApp - Auth</h1>
    	<div id="login">
<?php  	if(!isset($_GET['message'])){  print '<p class="tip">Create New User Account</p>';
    	  }else if($_GET['message']=='success')	print '<p class="inline_tip">'.$_GET['message'].'</p>'; else 	print '<p class="error">'.$_GET['message'].'</p>';
?>              
    	  <form method="post" action="index.php?components=authenticate&action=create_new"  onsubmit="return validateNewAccount()">
    	  <input type="hidden" id="passhash" name="passhash" />
    	  <input type="hidden" id="passignore" name="passignore" value="no" />
    	  <input type="hidden" name="type" value="1" />
    	 	<div><label><strong>Username</strong><input name="user_name" class="inputText" id="user_name" type="text" /></label></div>
    	    <div><label><strong>Password</strong><input class="inputText" id="user_pass1" type="password" /></label></div>
    	    <div><label><strong>Confirm Password</strong><input class="inputText" id="user_pass2" type="password" /></label></div>
    	 	<div><label><strong>Email</strong><input name="email" class="inputText" id="email" type="text" /></label></div>
    	 	<div><label><strong>Time Zone</strong>
    	 	<select name="timezone" id="timezone" style="font-size:8pt">
		      <option value="">-SELECT-</option>
            <?php for($i=0;$i<sizeof($timezone_val);$i++){
            	print '<option value="'.$timezone_val[$i].'" >'.$timezone_name[$i].'</option>';
            } ?>
		</select>
    	 	</label></div>
      	    <input class="black_button" value="Create Account" style="width: 111px;" type="submit" />
            <br /><br />  
    	  </form>
    	</div>
        <div id="forgot">
        <a href="index.php?components=authenticate&action=show_login" class="forgotlink"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Go Back to Login Page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
        </div>
  </div>
</div>
<br clear="all">
<br clear="all">

</body></html>