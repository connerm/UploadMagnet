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

$user = "";
if(!isset($_COOKIE["user"])) {
	$user = $_POST["user"];
	$user = mysql_real_escape_string($user);
	$pass = $_POST["pass"];
	$pass = mysql_real_escape_string($pass);
	
	$username = "";
	$password = "";
	$query = mysql_query("SELECT * FROM users WHERE username = '$user'");
	while($row = mysql_fetch_array($query)) {
		$username = $row["username"];
		$password = $row["password"];
	}
	if($password != $pass ||$username != $user ){
		die("<div id='centertext'><p>You Entered and incorrect username or password<br />Click <a href='login.php'>here</a> to try again</p></div>");
	}
	setcookie("user", $user);
}
else {
	$user = $_COOKIE["user"];
}
print "<h1>$user</h1>";
print "<p>you are logged in as $user<br />To log out click <a href='logout.php'>here</a><br /></p><h2>Your Links</h2>";

$query = "SELECT * FROM magnetlinks WHERE user = '$user' ORDER BY date DESC";
if(!$query) {
	print "<p>You have not uploaded any magnetlinks yet</p>";
}
else {
	$length = 20;
	include_once "results.php";

}

mysql_close($con);

include "footer.php" ?>