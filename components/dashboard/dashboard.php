<?php
if(isset($_SESSION['userkey'])){
	if($_SESSION['userkey']==md5($_SESSION['user_id']+777)){
                include_once  'components/dashboard/control/dashboardController.php';
    }else header('Location: index.php?components=authenticate&action=show_login');
}else header('Location: index.php?components=authenticate&action=show_login');
?>