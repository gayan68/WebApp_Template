<?php

switch ($_SERVER['SERVER_NAME']){
	case "webapps.localhost.local" :
	$conn=mysqli_connect('localhost','root','','webapp_auth');
	if(mysqli_connect_errno()){  echo "Failed to connect to MySQL: " . mysqli_connect_error();  }	
	break;
	
	case "localhost.local" :
	$conn=mysqli_connect('localhost','root','','webapp_auth');
	if(mysqli_connect_errno()){  echo "Failed to connect to MySQL: " . mysqli_connect_error();  }	
	break;
}

?>