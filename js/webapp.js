function validateNewAccount() {
	var $count = 0;
	var pass1 = document.getElementById('user_pass1').value;
	var pass2 = document.getElementById('user_pass2').value;
	var email = document.getElementById('email').value;
	var passignore = document.getElementById('passignore').value;
	if ((passignore == 'yes') && ((pass1 != '') || (pass2 != ''))) passignore = 'no';
	if (passignore == 'no') $email_txt = ',Email'; else $email_txt = '';
	if (document.getElementById('user_name').value == '') $count++;
	if (document.getElementById('timezone').value == '') $count++;
	var $msg = 'Username,Password' + $email_txt + ',Time Zone must be filled';
	if (email == '') $count++;
	if (passignore == 'no') {
		if (pass1 == '') $count++;
		if (pass2 == '') $count++;
	}

	if ($count == 0) {
		if (email.indexOf("@") < 1) { $count++; var $msg = "Invalid Email"; }
		if (email.indexOf(".") < 2) { $count++; var $msg = "Invalid Email"; }
	}
	if ((passignore == 'no') && (pass1 != pass2)) {
		var $msg = "Password Does Not Match";
		document.getElementById('user_pass1').value = '';
		document.getElementById('user_pass2').value = '';
		$count++;
	}
	if ((passignore == 'no') && ((pass1 != '') || (pass2 != ''))) {
		if ($count == 0) {
			if ((document.getElementById('user_pass1').value.length) < 8) {
				var $msg = "Password Must Contain 8 Characters or Longer";
				$count++;
			}
		}
	}
	if ($count != 0) {
		alert($msg);
		return false;
	} else {
		if (passignore == 'no') document.getElementById('passhash').value = md5(pass1);
		return true;
	}
}

function validateNewPassword() {
	var $count = 0;
	var pass1 = document.getElementById('user_pass1').value;
	var pass2 = document.getElementById('user_pass2').value;
	var $msg = "New Password and Confirm Password must be filled";
	if (pass1 == '') $count++;
	if (pass1 == '') $count++;
	if (pass1 != pass2) {
		var $msg = "Password Does Not Match";
		document.getElementById('user_pass1').value = '';
		document.getElementById('user_pass2').value = '';
		$count++;
	}
	if ((pass1 != '') || (pass2 != '')) {
		if ($count == 0) {
			if ((document.getElementById('user_pass1').value.length) < 8) {
				var $msg = "Password Must Contain 8 Characters or Longer";
				$count++;
			}
		}
	}
	if ($count != 0) {
		document.getElementById('passhash').value = md5(pass1);
		alert($msg);
		return false;
	} else {
		document.getElementById('passhash').value = md5(pass1);
		return true;
	}
}

function generateLogIn() {
	var pass = md5(document.getElementById('passwd').value);
	var token = document.getElementById('token').value;
	var onetime_pass = md5(pass + token);
	document.getElementById('onetime_pass').value = onetime_pass;
}

function validateDateRange() {
	var from_date = document.getElementById('from_date').value;
	var to_date = document.getElementById('to_date').value;
	if ((validateDate(from_date)) && (validateDate(to_date))) { return true } else {
		alert('Invalid Date Format');
		return false;
	}
}

function setAccountStatus($status) {
	if ($status == 0) $txt = 'Deactivate';
	if ($status == 1) $txt = 'Activate';
	var id = document.getElementById('id').value;
	var check = confirm("Do you want to " + $txt + " this User ?");
	if (check == true)
		window.location = 'index.php?components=settings&action=set_user_status&newstatus=' + $status + '&id=' + id;
}

function deleteUser() {
	var id = document.getElementById('id').value;
	var check = confirm("Do you want to Delete this User ?");
	if (check == true)
		window.location = 'index.php?components=settings&action=delete_user&id=' + id;
}

