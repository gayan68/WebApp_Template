<?php
                include_once  'template/m_header.php';
?>
	<script src="js/md5.min.js"></script>
<!-- ------------------------------------------------------------------------------------ -->
<form method="post" action="index.php?components=authenticate&action=login" onsubmit="return generateLogIn()">
	<input type="hidden" id="token" value="<?php print $token; ?>" />
	<input type="hidden" id="onetime_pass" name="onetime_pass" />
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
  	<tr><td height="80px"></td></tr>
  	<tr><td align="center"><input type="text" name="user_name" id="uname" placeholder="Username" onfocus="this.value=''" style="color:#BBB; font-size:large;" /><br /><br /></td></tr>
  	<tr><td align="center"><input type="password" id="passwd" placeholder="Password" onfocus="this.value=''" style="color:#BBB; font-size:large;" /><br /><br /></td></tr>
  	<tr><td align="center"><input class="button" style="width:150px; height:50px; font-weight:bold; color:gray" type="submit" value="Sign In" /></td></tr>
  	<tr><td height="40px"></td></tr>
  	<tr><td align="center"><div><a href="index.php?components=authenticate&action=show_forgot_password" style="color:gray; text-decoration:none; font-size:9pt">Forgot your username or password?</a></div> </td></tr>
  	<tr><td height="30px" align="center">
        <div id="forgot" style="width:150px; height:24px; position:relative; top:28px; color:grey; border-radius: 0px 0px 8px 8px; background-color:#DDDDDD; cursor:pointer; border: 0px solid #EEEEEE;" align="center">
        <a href="index.php?components=authenticate&action=show_new" style="text-decoration:none; font-size:8pt"><span>Create New Account</span></a>
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