<?php
                include_once  'template/m_header.php';
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
<!-- ------------------------------------------------------------------------------------ -->
<form action="index.php?components=authenticate&action=set_pw" onsubmit="return validateChangePW()" method="post" >
    <input type="hidden" id="token" value="<?php print $token; ?>" />
    <input type="hidden" id="onetime_pass" name="onetime_pass" />
	<input type="hidden" id="action" value="create" />
	<input type="hidden" id="passhash" name="passhash" />
	<input type="hidden" id="emp_name" value="aaa" />
	<input type="hidden" id="action" value="create" />
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
  	<tr><td height="80px" align="center" style="color:silver">Store: <span style="color:gray"><?php if(isset($_COOKIE['store_name'])) print $_COOKIE['store_name']; ?></span></td></tr>
  	<tr><td align="center"><input type="text" id="user_name" value="<?php print $_COOKIE['user']; ?>" readonly="readonly" style="background-color:#F5F5F5" /><br /><br /></td></tr>
  	<tr><td align="center"><input type="password" id="passwd" placeholder="OLD Password"/><br /><br /></td></tr>
  	<tr><td align="center"><input type="password" id="user_pass1" placeholder="New Password"/><br /><br /></td></tr>
  	<tr><td align="center"><input type="password" id="user_pass2" placeholder="Confirm Password"/><br /><br /></td></tr>
  	<tr><td align="center"><input class="button" style="width:150px; height:50px; font-weight:bold; color:gray" type="submit" value="Change Password" /></td></tr>
  	<tr><td height="80px"></td></tr>
  </table>
	
  </div>
</div>
</div>
</form>

<?php
                include_once  'template/m_footer.php';
?>