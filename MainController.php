<?php
$api_access=$settings_menu=false;

if(!$api_access){
if(!isset($_SESSION['userkey'])) session_start();
include_once  'template/common.php';
if((isset($_COOKIE['userkey']))&&(isset($_SESSION['userkey']))){
	if($_SESSION['userkey']==$_COOKIE['userkey']){
	if($_SESSION["user_type"]==1){
	$menu_margin=240;
	$settings_menu=true; 
	}else{
		$menu_margin=290;
	}

	
	if(passwordExpire()) header('Location: index.php?components=authenticate&action=show_pwchange_form&message=Your%20Password%20Has%20Expired.%20Please%20Change%20it%20NOW&re=fail');
		if(isset($_REQUEST['components'])){
	        switch ($_REQUEST['components']){
	            case "dashboard" :
	                include_once  'components/dashboard/dashboard.php';
	            break;
	            case "authenticate" :
	                include_once  'components/authenticate/authenticate.php';
	            break;
	            default:
	                header('Location: index.php?components=dashboard&action=home');
	            break;
	        }
		}else{
	                header('Location: index.php?components=dashboard&action=home');
		}
	}else{
		header('Location: index.php?components=authenticate&action=logout');
	}
}else
if((!isset($_SESSION['userkey']))&&(!isset($_COOKIE['userkey']))){
	if(isset($_REQUEST['components'])){
		switch ($_REQUEST['components']){
			case "authenticate" :
				include_once  'components/authenticate/authenticate.php';
			break;
			default:
				header('Location: index.php?components=authenticate&action=logout');
			break;
		} 
	}else header('Location: index.php?components=authenticate&action=logout');
}else if((!isset($_SESSION['userkey']))||(isset($_COOKIE['userkey']))){
	include_once  'components/authenticate/modle/authenticateModule.php';
	validateSession();
	header('Location: index.php');
}else{
	include_once  'components/authenticate/modle/authenticateModule.php';
	logout();
	header('Location: index.php');
}
}
?>