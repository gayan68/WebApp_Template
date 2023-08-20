<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WebApp</title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link rel="stylesheet" type="text/css" href="css/webapp.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />  
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/blend/jquery.blend.js"></script>
	<script type="text/javascript" src="js/ui.core.js"></script>
	<script type="text/javascript" src="js/ui.sortable.js"></script>    
    <script type="text/javascript" src="js/ui.dialog.js"></script>
    <script type="text/javascript" src="js/ui.datepicker.js"></script>
    <script type="text/javascript" src="js/effects.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.pack.js"></script>
    <!--[if IE]>
    <script language="javascript" type="text/javascript" src="js/flot/excanvas.pack.js"></script>
    <![endif]-->
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/iefix.css" />
	<script src="js/pngfix.js"></script>
    <script>
        DD_belatedPNG.fix('#menu ul li a span span');
    </script>        
    <![endif]-->
    <script id="source" language="javascript" type="text/javascript" src="js/graphs.js"></script>
    <script type="text/javascript" src="js/plname.js"></script>
    <script type="text/javascript" src="js/webapp.js"></script>
    <script>
    function closeWindow() {
        window.open('','_parent','');
        window.close();
    }
</script> 
</head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
<!-- HIDDEN COLOR CHANGER -->      
  	<!--LOGO-->
	<div class="grid_8" id="logo">WebApp</div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools"><span><a href="#" class="mail">(1)</a> Welcome <a href="index.php?components=authenticate&action=show_pwchange_form"><?php print ucfirst($_COOKIE['user_name']); ?></a>  
		  | <a href="index.php?components=authenticate&action=logout">
		  Logout</a></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu" >
	<ul class="group" id="menu_group_main" style="margin: 12px 0px 0px <?php print $menu_margin; ?>px;">
	<?php 
	$menu_select1=$menu_select2=$menu_select3=''; 
	if($_GET['components']=='dashboard') $menu_select1='class="main current"';
	?>
		<li class="item first" id="one"><a href="index.php?components=dashboard&action=home" <?php print $menu_select1; ?> ><span class="outer"><span class="inner dashboard">Dashboard</span></span></a></li>
		<?php if($settings_menu){ ?>
		<li class="item middle" id="three"><a href="#" <?php print $menu_select3; ?> ><span class="outer"><span class="inner seven">Settings</span></span></a></li>
		<?php } ?>
		<li class="item last" id="four"><a href="index.php?components=authenticate&action=logout" ><span class="outer"><span class="inner eight">Logout</span></span></a></li>
    </ul>
</div>
<!-- MENU END -->
			