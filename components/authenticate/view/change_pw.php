<?php
                include_once  'template/header.php';
?>
	<script src="js/md5.min.js"></script>
<script type="text/javascript">
	function validateChangePW(){
		generateLogIn();
		if(validateUser()){
			return true;
		}else{
			return false;
		}
	}
</script>
<!-- ---------------------------------------------------------------- -->

	<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				<!-- Logo (221px width) -->
				&nbsp;</div> <!-- End #logn-top -->
			
			<div id="login-content"><br /><br />
			
	
<table align="center" width="470px" bgcolor="#EEEEEE" style="font-family:Calibri">
<tr><td bgcolor="#EEEEEE" height="15px" align="center">
<?php 
	if(isset($_REQUEST['message'])){
		if($_REQUEST['re']=='success') $color='green'; else $color='red';
			print '<span style="color:'.$color.'; font-weight:bold;font-size:12pt;">'.$_REQUEST['message'].'</span>'; 
	}
?></td></tr>
<tr><td align="center">
	<form action="index.php?components=authenticate&action=set_pw" onsubmit="return validateChangePW()" method="post" >
    <input type="hidden" id="token" value="<?php print $token; ?>" />
    <input type="hidden" id="onetime_pass" name="onetime_pass" />
	<input type="hidden" id="action" value="create" />
	<input type="hidden" id="passhash" name="passhash" />
	<input type="hidden" id="emp_name" value="aaa" />
	<input type="hidden" id="action" value="create" />
	<table align="center" style="font-size:12pt; font-family:Calibri; font-weight:bold">
	<tr><td colspan="7" align="center" style="color:navy;"><strong>Change Password</strong><br /><br /></td></tr>
	<tr><td width="50px"></td><td>Username</td><td><input type="text" id="user_name" value="<?php print $_COOKIE['user']; ?>" readonly="readonly" style="background-color:#F5F5F5" /></td><td width="50px"></td></tr>
	<tr><td width="50px"></td><td>Old Password</td><td><input type="password" id="passwd" /></td><td width="50px"></td></tr>
	<tr><td width="50px"></td><td>Passowrd</td><td><input type="password" id="user_pass1" /></td><td width="50px"></td></tr>
	<tr><td width="50px"></td><td>Confirm Password</td><td><input type="password" id="user_pass2" /></td><td width="50px"></td></tr>
	<tr><td colspan="4" align="center"><br /><input type="submit" value="Change Password" style="width:150px; height:50px" /><br /></td></tr>
	</table>
	</form>
								
</td></tr>
<tr><td bgcolor="#EEEEEE" height="15px"></td></tr>
</table>								
			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->
<?php
                include_once  'template/footer.php';
?>	