<?php
if(isset($_SESSION['userkey'])&&(isset($_SESSION['user_id']))){
	if($_SESSION['userkey']==md5($_SESSION['user_id']+777)){
		if($_GET['action']!='show_pwchange_form' && $_GET['action']!='change_password'){
	        header('Location: index.php?components=dashboard&action=home');
        }
    }
}

           include_once  'components/authenticate/control/authenticateController.php';
?>