<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-US" />
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="validations.js"></script>
</head>

<?php
include 'header.php';
include_once 'connectdb.php';

session_start();

include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';
$securimage = new Securimage();

if ($securimage->check($_POST['captcha_code']) == false) {
  echo "The security code entered was incorrect.<br /><br />";
  echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
  exit;
}

$username = $_POST["username"];
$username = mysql_real_escape_string($username);
$email = $_POST["email"];
$email - mysql_real_escape_string($email);
$pass = $_POST["pass1"];
$pass = mysql_real_escape_string($pass);

$query = "INSERT INTO users (username, email, password)
	VALUES ('$username', '$email', '$pass')";
if(!mysql_query($query, $con)) {
	die ("There was an error in creating your account: " . mysql_error());	
}
//add email verification here
mysql_close($con);
session_destroy();
?>
<h1> Account Created</h1>
<p>Your Account has successfully been created
Login in <a href="login.php">here</a>
</p>

<? include "footer.php" ?>