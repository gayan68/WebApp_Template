<?php
function generateToken(){
global $token;
	$token=md5(time()+rand());
	include('config.php');
		$query="SELECT MAX(id) FROM onetime_token";
		$row=mysqli_fetch_row(mysqli_query($conn,$query));
		$max_id=$row[0];
		$query="SELECT MIN(id) FROM onetime_token";
		$row=mysqli_fetch_row(mysqli_query($conn,$query));
		$min_id=$row[0];
		$next_id=$max_id+1;

		$query="UPDATE `onetime_token` SET `id`='$next_id',`token`='$token' WHERE id='$min_id'";
		mysqli_query($conn,$query);

}

function login(){
	global $message;
	$user=$_POST['user_name'];
	$onetime_pass=$_POST['onetime_pass'];
	if(isset($_POST['remember'])) $remember_duration=1440; else $remember_duration=10;
	$out=false;
	$id=$authentication=0;
		include('config.php');
		$query="SELECT password,`status` FROM userprofile WHERE `username`='$user'";
		$row=mysqli_fetch_row(mysqli_query($conn,$query));
		$pass=$row[0];
		$status=$row[1];
		$query="SELECT token FROM onetime_token ORDER BY id DESC";
		$result=mysqli_query($conn,$query);
		while($row=mysqli_fetch_array($result)){
			$token=$row[0];
			if($onetime_pass==md5($pass.$token)){
				$out=true;
			}
		}
		if(!$out){ $message='Invalid Username or Password!'; }
		if($status==0){ $message='Your Account is Deactivated!'; $out=false; }
		if($status==2){ $message='Your Account is Pending by Email Activation. Kindly check activation link in your Email!'; $out=false; }
		if($out){
			$query="SELECT up.`id`,up.`username`,up.`type` FROM `userprofile` up WHERE up.`username`='$user' AND up.`status`=1";
			$row=mysqli_fetch_row(mysqli_query($conn,$query));
			if($row[0]!=''){
				$up_id=$row[0];
				$up_name=$row[1];
				$up_type=$row[2];
				setcookie('user_id',$up_id, time()+3600*10);
				setcookie('user_name',$up_name, time()+3600*10);
				setcookie('userkey',md5($up_id+777), time()+3600*$remember_duration);
				$_SESSION["user_type"] = $up_type;
				$_SESSION["user_id"] = $up_id;
				$_SESSION["userkey"] = md5($up_id+777);
				return true;
			}else{ $message='Invalid Username or Password!'; }
		}
	if($out){
		return true;
	}else{
		return false;
	}
}

function validateSession(){
	$userkey=$_COOKIE['userkey'];
	$authentication=0;
	include('config.php');
	$query="SELECT up.id,up.username,up.`type`FROM userprofile up WHERE up.`status`=1";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($result)){
		if($userkey==md5($row[0]+777)){
			$authentication++;
			$up_id=$row[0];
			$up_name=$row[1];
			$up_type=$row[2];
		}
	}
	if($authentication>0){
		setcookie('user_id',$up_id, time()+3600*10);
		setcookie('user_name',$up_name, time()+3600*10);
		$_SESSION["user_type"] = $up_type;
		$_SESSION["user_id"] = $up_id;
		$_SESSION["userkey"] = $userkey;
	}
}

function logout(){
	include('config.php');
	global $message;
	setcookie("user_id",'', time()-3600*10);
	setcookie("user_name",'', time()-3600*10);
	setcookie("userkey",'', time()-3600*10);
	session_unset(); 
	session_destroy();
	return true;
}

function changePassword(){
	global $message;
	$msg='Old Password is Incorrect!';
	$user_id=$_COOKIE['user_id'];
	$onetime_pass=$_POST['onetime_pass'];
	$new_password=$_POST['passhash'];
	$authentication=0;
		include('config.php');
		$query="SELECT password FROM userprofile WHERE `id`='$user_id'";
		$row=mysqli_fetch_row(mysqli_query($conn,$query));
		$pass=$row[0];
		$query="SELECT token FROM onetime_token ORDER BY id DESC";
		$result=mysqli_query($conn,$query);
		while($row=mysqli_fetch_array($result)){
			$token=$row[0];
			if($onetime_pass==md5($pass.$token)){
				$authentication++;
			}
		}
		if($pass==$new_password){
			$msg='Old Password and New Password Must Not be the SAME';
			$authentication=0;
		}
		if($authentication>0){
			$query1="UPDATE userprofile SET `password`='$new_password', `change_pw`='0' WHERE id='$user_id'";
			$result1=mysqli_query($conn,$query1);
			if($result1){
				$message='Password Was Changed Successfully';	
				return true;
			}else{
				$message='Error: Password Could Not Be Changed!';	
				return false;
			}
		}else{
			$message=$msg;	
			return false;
		}
}

function getTimeZones(){
	global $timezone_val,$timezone_name;
	include('config.php');
	$query="SELECT value,name FROM timezone ORDER BY value";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($result)){
		$timezone_val[]=$row[0];
		$timezone_name[]=$row[1];
	} 
}

function createUser(){
	global $message;
	$user_name=strtolower($_POST['user_name']);
	$user_pass=$_POST['passhash'];
	$email=$_POST['email'];
	$type=$_POST['type'];
	$timezone=$_POST['timezone'];
	$token=md5(time()+rand());
	$out=true;
	include('config.php');
	if($out){
		$query="SELECT count(id) FROM userprofile WHERE `username`='$user_name'";
		$row=mysqli_fetch_row(mysqli_query($conn,$query));
		if($row[0]>0){ $message='This Username is Already Taken.<br />Please Try a Different Username'; $out=false; }
	}
	if($out){
		$query="SELECT count(id) FROM userprofile WHERE `email`='$email'";
		$row=mysqli_fetch_row(mysqli_query($conn,$query));
		if($row[0]>0){ $message='This Email Address is Already Registered.'; $out=false; }
	}
	
	if($out){
		if($out){
			$query="INSERT INTO userprofile (`username`,`password`,`email`,`type`,`token`,`timezone`,`status`) VALUES ('$user_name','$user_pass','$email','$type','$token','$timezone','2')";
			$result=mysqli_query($conn,$query);
		}
		if(!$result){ $message='User Account Could Not be Created. Please Contact Support'; $out=false; }
	}
	if($out){
			$body_wording='Please complete your HomeControl account ('.$email.') by confirming your email address.';
			$button_name='VERIFY EMAIL';
			$action_url='http://www.test.com/index.php?components=authenticate&action=activate&token='.$token;
			include  'template/email/email_template2.php';
			$subject = 'Verify your WebApp account';
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			$headers .= "From: alerts@test.com\r\n";	
			$sent=mail($email,$subject,$message,$headers);
		if(!$sent){ $message='Email Could Not be Sent. Please Contact Support'; $out=false; }
	}
	
	if($out){
		$message='New Account was Created Successfully !';	
		return true;
	}else{
		return false;
	}
}

function activateUser(){
	global $message;
	$out=true;
	$token=$_GET['token'];
	include('config.php');
	$query="SELECT `status` FROM userprofile WHERE token='$token'";
	$row=mysqli_fetch_row(mysqli_query($conn,$query));
	if($row[0]==''){ $message='Invalid Token'; $out=false; 	}
	if($row[0]==1){ $message='This user is Alredy Activated'; $out=false; 	}
	if($out){
		$query="UPDATE `userprofile` SET `status`='1' WHERE `token`='$token'";
		$result=mysqli_query($conn,$query);
		if(!$result){ $message='The User Cannot be Activated, Please Contact Support'; $out=false; }
	}
	if($out){
		$message='The User was Activated Successfully.<br />Please Login';	
		return true;
	}else{
		return false;
	}
}

function sendPWreset(){
	global $message;
	$out=true;
	$email=$_POST['email'];
	$token=md5(time()+rand());
	if(!(strpos($email,'@')>1)){ $message='Invalid Email Address'; $out=false; 	}
	include('config.php');
	if($out){
		$query="SELECT count(up.id),up.username FROM userprofile up WHERE up.email='$email'";
		$row=mysqli_fetch_row(mysqli_query($conn,$query));
		if($row[0]!=1){ $message='Invalid Email Address'; $out=false; 	}
		$user_name=$row[1];
	}
	if($out){
		$link_expiry=date("Y-m-d H:i:s",time()+(3600)); //Password Reset Link is Valid only for 1 hour
		$query="UPDATE `userprofile` SET `token`='$token',`token_expiry`='$link_expiry' WHERE `email`='$email'";
		$result=mysqli_query($conn,$query);
		if(!$result){ $message='The Password Reset Link Cannot be Sent.<br />Please Contact Support'; $out=false; }
	}
	if($out){
			$body_wording='We have received a password reset request for your account. Please find following username and password reset link. Please note that the link is valid only for 1 hour.<br />Username : '.$user_name;
			$button_name='Reset Password';
			$action_url='http://www.test.com/index.php?components=authenticate&action=show_password_reset&token='.$token;
			include  'template/email/email_template2.php';
			$subject = 'Verify your WebApp account';
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			$headers .= "From: alerts@test.com\r\n";	
			$sent=mail($email,$subject,$message,$headers);
		if(!$sent){ $message='Email Could Not be Sent. Please Contact Support'; $out=false; }
	}
	if($out){
		$message='Password Reset Link was Sent Successfully.<br />Please Check Your Email';	
		return true;
	}else{
		return false;
	}
}

function validatePasswordReset($token){
	$time_now=date("Y-m-d H:i:s",time());
	include('config.php');
	$query="SELECT count(id) FROM userprofile WHERE `status`=1 AND token='$token' AND token_expiry>'$time_now'";
	$row=mysqli_fetch_row(mysqli_query($conn,$query));
	if($row[0]=='1') return true; else return false;
}

function resetPassword(){
	global $message;
	$token=$_GET['token'];
	$user_pass=$_POST['passhash'];
	$expire_token=date("Y-m-d H:i:s",time()-(3600));
	$out=true;
	if(!validatePasswordReset($token)){ $message='Invalid Password Reset Token. Please Send the Reset Link Again'; $out=false; }
	if($out){
		include('config.php');
		$query="UPDATE `userprofile` SET `password`='$user_pass',`status`='1',`token_expiry`='$expire_token' WHERE token='$token'";
		$result=mysqli_query($conn,$query);
		if(!$result){ $message='Password Reset Failed.<br />Please Contact Support'; $out=false; }
	}
	if($out){
		$message='Password was Reset Successfully<br />Please Login';	
		return true;
	}else{
		return false;
	}
}

function changePassword2(){
	global $message;
	$user_id=$_COOKIE['user_id'];
	$user_pass=$_POST['passhash'];
	$expire_token=date("Y-m-d H:i:s",time()-(3600));
	$out=true;
	if($out){
		include('config.php');
		$query="UPDATE `userprofile` SET `password`='$user_pass' WHERE id='$user_id'";
		$result=mysqli_query($conn,$query);
		if(!$result){ $message='Password Change Failed.<br />Please Contact Support'; $out=false; }
	}
	if($out){
		$message='Password was Changed Successfully';	
		return true;
	}else{
		return false;
	}
}

?>