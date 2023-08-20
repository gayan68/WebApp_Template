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
    <form method="post" action="index.php?components=authenticate&action=change_password" onsubmit="return validateNewPassword()">
  	<input type="hidden" id="passhash" name="passhash" />
  <table align="center" bgcolor="#EEEEEE" width="300px">
  	<tr><td height="20px"></td></tr>
  	<tr><td height="20px" style="color:gray" align="center">Password Change Form<br /><br /></td></tr>
  	<tr><td align="center"><input type="password" id="user_pass1" placeholder="New Password" onfocus="this.value=''" style="color:#BBB; font-size:large;" /><br /><br /></td></tr>
  	<tr><td align="center"><input type="password" id="user_pass2" placeholder="Confirm Password" onfocus="this.value=''" style="color:#BBB; font-size:large;" /><br /><br /></td></tr>
  	<tr><td align="center"><input class="button" style="width:150px; height:50px; font-weight:bold; color:gray" type="submit" value="Change Password" /></td></tr>
  	<tr><td height="40px"></td></tr>
  	<tr><td height="30px" align="center">
        <div id="forgot" style="width:150px; height:24px; position:relative; top:28px; color:grey; border-radius: 0px 0px 8px 8px; background-color:#DDDDDD; cursor:pointer; border: 0px solid #EEEEEE;" align="center">
        <a href="index.php?components=dashboard&action=home" style="text-decoration:none; font-size:8pt"><span>Go Back to HOME</span></a>
        </div>
  	</td></tr>
  </table>
  </form>
  </div>
</div>
</div>

<?php
                include_once  'template/m_footer.php';
?>