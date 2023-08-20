<?php
                include_once  'template/m_header.php';
?>
	<script src="js/md5.min.js"></script>
<!-- ------------------------------------------------------------------------------------ -->
<div class="w3-container" style="margin-top:75px">
<?php 
	if(isset($_REQUEST['message'])){
		if($_REQUEST['re']=='success') $color='green'; else $color='red';
	print '<span style="color:'.$color.'; font-weight:bold;font-size:large;">'.$_REQUEST['message'].'</span>'; 
	}
?>	
<hr>
<div class="w3-row">
  <div class="w3-col s3">
  </div>
  <div class="w3-col">
  <table align="center" bgcolor="#EEEEEE" width="300px">
  	<tr><td height="20px"></td></tr>
	<?php if($_GET['action']=='show_forgot_password'){ ?>    
	<form method="post" action="index.php?components=authenticate&action=send_pw_reset">
  	<tr><td align="center"><p class="tip">Please Enter Your Registered Email Address, So we can send you your username and password reset link!</p><br /><br /></td></tr>
  	<tr><td align="center"><input type="email" id="email" name="email" placeholder="Email Address" onfocus="this.value=''" style="color:#BBB; font-size:large;" /><br /><br /></td></tr>
  	<tr><td align="center"><input class="button" style="width:150px; height:50px; font-weight:bold; color:gray" type="submit" value="Send Link" /></td></tr>
   	</form>
   <?php }else if($_GET['action']=='show_pwreset_form'){ ?>
    <form method="post" action="index.php?components=authenticate&action=reset_password&token=<?php print $_GET['token']; ?>" onsubmit="return validateNewPassword()">
  	<input type="hidden" id="passhash" name="passhash" />
  	<tr><td height="20px" style="color:gray" align="center">Please Reset your password by filling bellow form<br /><br /></td></tr>
  	<tr><td align="center"><input type="password" id="user_pass1" placeholder="New Password" onfocus="this.value=''" style="color:#BBB; font-size:large;" /><br /><br /></td></tr>
  	<tr><td align="center"><input type="password" id="user_pass2" placeholder="Confirm Password" onfocus="this.value=''" style="color:#BBB; font-size:large;" /><br /><br /></td></tr>
  	<tr><td align="center"><input class="button" style="width:150px; height:50px; font-weight:bold; color:gray" type="submit" value="Reset Password" /></td></tr>
   <?php } ?>
  	<tr><td height="40px"></td></tr>
  	<tr><td height="30px" align="center">
        <div id="forgot" style="width:150px; height:24px; position:relative; top:28px; color:grey; border-radius: 0px 0px 8px 8px; background-color:#DDDDDD; cursor:pointer; border: 0px solid #EEEEEE;" align="center">
        <a href="index.php?components=authenticate&action=show_login" style="text-decoration:none; font-size:8pt"><span>Go Back to Login Page</span></a>
        </div>
  	</td></tr>
  </table>
  </div>
</div>
</div>
</form>

<?php
                include_once  'template/m_footer.php';
?>