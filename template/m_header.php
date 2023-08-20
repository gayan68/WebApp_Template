<!DOCTYPE html>
<html>
<?php
		$apptitle='HomeControl';
		$mailtheme='w3-theme-dark';
		$navtheme='w3-theme-d5';
?>
<title>Web App</title>
<link rel="manifest" href="js/manifest.json">
<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no">
<meta name="HandheldFriendly" content="true" />
<meta name="mobile-web-app-capable" content="yes">
<link rel="stylesheet" href="css/mobile1.css">
<link rel="stylesheet" href="css/mobile2.css">
<link rel="stylesheet" href="css/mobile3.css">
<link rel="stylesheet" href="css/webapp.css" type="text/css" media="screen" />	
<script src="js/webapp.js"></script>
<script type="text/javascript">
// Detect whether device supports orientationchange event, otherwise fall back to
// the resize event.
var supportsOrientationChange = "onorientationchange" in window,
    orientationEvent = supportsOrientationChange ? "orientationchange" : "resize";

window.addEventListener(orientationEvent, function() {
	var portrait=document.getElementById('portrait').innerHTML;
	var landscape=document.getElementById('landscape').innerHTML;
    if(window.orientation==0)
    {
    	if(landscape!='') document.getElementById('portrait').innerHTML=landscape;
    	document.getElementById('landscape').innerHTML='';
    }
    else if(window.orientation==90)
    {
    	if(portrait!='') document.getElementById('landscape').innerHTML=portrait;
    	document.getElementById('portrait').innerHTML='';
    }
    else if(window.orientation==180)
    {
    	if(landscape!='') document.getElementById('portrait').innerHTML=landscape;
    	document.getElementById('landscape').innerHTML='';
    }
    else if(window.orientation==-90)
    {
    	if(portrait!='') document.getElementById('landscape').innerHTML=portrait;
    	document.getElementById('portrait').innerHTML='';
    }
}, false);
</script>

<body>
<nav class="w3-sidenav w3-card-2 w3-white w3-top" style="width:30%;display:none;z-index:2" id="mySidenav">
<div class="w3-container <?php print $navtheme; ?>">
  <span onclick="w3_close()" class="w3-closenav w3-right w3-xlarge">x</span>
  <br>
  <div class="w3-padding w3-center">
    <img class="w3-circle" src="images/logo.png" alt="avatar" style="width:75%" />
  </div>
</div>
<br>
<?php if(isset($_SESSION['userkey'])){ ?>
<a href="index.php?components=dashboard&action=home"><strong>Dashboard</strong></a>
<br />
<br />
<hr />
<?php if(isset($_COOKIE['user_name']))
print '<a href="index.php?components=authenticate&action=show_pwchange_form" style="text-decoration:none; color:blue; font-weight:bold;">'.ucfirst($_COOKIE['user_name']).'</a>';
print '<a href="index.php?components=authenticate&action=logout">Logout</a>';
} ?>

</nav>

<header class="w3-container w3-card-4 <?php print $mailtheme; ?> w3-top">
  <h3> <table width="100%"><tr><td width="40px" >
  <i class="w3-opennav fa fa-bars" onclick="w3_open()"></i>
  </td>
<?php
        switch ($_REQUEST['components'])
        {
        
            case "authenticate" :
            	if($_GET['action']=='show_login'){
            		print '<td>Login</td><td align="right"></td>';
            	}elseif($_GET['action']=='show_forgot_password'){
            		print '<td>Reset Password</td><td align="right"></td>';
            	}elseif($_GET['action']=='show_forgot_password'){
            		print '<td>Reset Password</td><td align="right"></td>';
            	}elseif($_GET['action']=='show_pwreset_form'){
            		print '<td>Reset Password</td><td align="right"></td>';
            	}elseif($_GET['action']=='show_new'){
            		print '<td>New Account</td><td align="right"></td>';
            	}elseif($_GET['action']=='show_pwchange_form'){
            		print '<td>Change Password</td><td align="right"></td>';
            	}
            break;
        
            case "dashboard" :
            		print '<td>Dashboard</td><td align="right"></td>';
            break;
            
        }

?>
</tr></table>
  </h3>
</header>
