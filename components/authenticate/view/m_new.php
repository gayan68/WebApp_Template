<?php
                include_once  'template/m_header.php';
?>
	<script src="js/md5.min.js"></script>
<!-- ------------------------------------------------------------------------------------ -->
<form method="post" action="index.php?components=authenticate&action=create_new"  onsubmit="return validateNewAccount()">
	<input type="hidden" id="passhash" name="passhash" />
	<input type="hidden" id="passignore" name="passignore" value="no" />
	<input type="hidden" name="type" value="1" />
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
  	<tr><td align="center"><input type="text" name="user_name" id="user_name" placeholder="Username" onfocus="this.value=''" style="color:#BBB; font-size:large;" /><br /><br /></td></tr>
  	<tr><td align="center"><input type="password" id="user_pass1" placeholder="Password" onfocus="this.value=''" style="color:#BBB; font-size:large;" /><br /><br /></td></tr>
  	<tr><td align="center"><input type="password" id="user_pass2" placeholder="Confirm Password" onfocus="this.value=''" style="color:#BBB; font-size:large;" /><br /><br /></td></tr>
  	<tr><td align="center"><input type="text" name="email" id="email" placeholder="Email" onfocus="this.value=''" style="color:#BBB; font-size:large;" /><br /><br /></td></tr>
  	<tr><td align="center" style="color:gray">TimeZone<br />
    	 	<select name="timezone" id="timezone" style="font-size:8pt">
		      <option value="">-SELECT-</option>
            <?php for($i=0;$i<sizeof($timezone_val);$i++){
            	print '<option value="'.$timezone_val[$i].'" >'.$timezone_name[$i].'</option>';
            } ?>
		</select>
  	</td></tr>
  	<tr><td align="center"><input class="button" style="width:150px; height:50px; font-weight:bold; color:gray" type="submit" value="Create Account" /></td></tr>
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
<br />
<br />
<br />
<?php
                include_once  'template/m_footer.php';
?>