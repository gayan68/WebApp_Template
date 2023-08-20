<?php
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function timeNow(){
	$system=$_COOKIE['system'];
	include('config.php');
	$result = mysqli_query($conn,"SELECT time_zone FROM systems WHERE id='$system'");
	$row = mysqli_fetch_assoc($result);
	$timezone=$row['time_zone'];
	$time_now=date("Y-m-d H:i:s",time()+(60*60*$timezone));
	return $time_now;
}

function dateNow(){
	$system=$_COOKIE['system'];
	include('config.php');
	$result = mysqli_query($conn,"SELECT time_zone FROM systems WHERE id='$system'");
	$row = mysqli_fetch_assoc($result);
	$timezone=$row['time_zone'];
	$date_now=date("Y-m-d",time()+(60*60*$timezone));
	return $date_now;
}

function passwordExpire(){
	include('config.php');
	$user_id=$_COOKIE['user_id'];
	$result = mysqli_query($conn,"SELECT change_pw FROM userprofile WHERE `id`='$user_id'");
	$row = mysqli_fetch_assoc($result);
	if($row['change_pw']==1) $change_pw=true; else $change_pw=false;
	return $change_pw;
}

function subscription(){
	include('config.php');
	$result = mysqli_query($conn,"SELECT value FROM settings WHERE setting='subscription_start'");
	$row = mysqli_fetch_assoc($result);
	$subscription_start=$row['value'];
	$result = mysqli_query($conn,"SELECT value FROM settings WHERE setting='subscription_duration'");
	$row = mysqli_fetch_assoc($result);
	$subscription_duration=$row['value'];
	$timestamp_start=strtotime($subscription_start);
	$timestamp_nest=$timestamp_start+$subscription_duration*24*60*60;
	$timestamp_gap=$timestamp_nest-time();
	$subscription_end=round($timestamp_gap / 60 / 60 / 24);
	return $subscription_end;
}

function inf_from_email(){
	include('config.php');
	$result = mysqli_query($conn,"SELECT value FROM settings WHERE setting='from_email'");
	$row = mysqli_fetch_assoc($result);
	return $row['value'];
}
function inf_to_email(){
	include('config.php');
	$result = mysqli_query($conn,"SELECT value FROM settings WHERE setting='to_email'");
	$row = mysqli_fetch_assoc($result);
	return $row['value'];
}
function inf_url_primary(){
	include('config.php');
	$result = mysqli_query($conn,"SELECT value FROM settings WHERE setting='url_primary'");
	$row = mysqli_fetch_assoc($result);
	return $row['value'];
}
function inf_url_backup(){
	include('config.php');
	$result = mysqli_query($conn,"SELECT value FROM settings WHERE setting='url_backup'");
	$row = mysqli_fetch_assoc($result);
	return $row['value'];
}



?>