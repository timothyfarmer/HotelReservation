<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require_once('header.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="main">
<!-- TODO: Add client side input validation -->
<?php 
	echo form_open('login/doLogin');
	$data = array('id'=>'uname', 'maxlength'=>'16', 'name'=>'username', "required" => "required");
	echo 'Username: ';
	echo form_input($data);
	echo '<br />';
	$data = array('id'=>'pass', 'maxlength'=>'16', 'name'=>'password', "required" => "required");
	echo 'Password: ';
	echo form_password($data);
	echo '<br />';
	echo form_submit('loginsubmit', 'Login');
	echo form_close();
?>
</div>

</body>
</html>
