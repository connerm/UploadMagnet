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

if ($securimage->check($_GET['captcha_code']) == false) {
  echo "<p>The security code entered was incorrect.<br /><br />";
  echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.<p>";
  exit;
}
if(isset($_COOKIE["user"])) {
	$user = $_COOKIE["user"];
}
else {
	die ("<p><div id='centertext'>You must be logged in to upload.</div></p>");
}

$title = $_GET["title"];
$title = mysql_real_escape_string($title);
$link = $_GET["link"];
$link = mysql_real_escape_string($link);
$type = $_GET["type"];
$type = mysql_real_escape_string($type);
$user = mysql_real_escape_string($user);
$date = time();
$rating = 0;
$info = $_GET["information"];
$info = nl2br($info);
$info = mysql_real_escape_string($info);
$input = "INSERT INTO magnetlinks (title, link, type, rating, user, info) 
VALUES ('$title', '$link', '$type', '$rating', '$user', '$info')";
if(!mysql_query($input, $con)) {
	trigger_error("ERROR: " . mysql_error());
}

print "<p>Thank you $user, for uploading a Magnet Link<br />";
print "Here is your magnet link: '<a href='link.php?link=$link&title=$title&type=$type&rating=$rating&date=$date&user=$user'>$title</a>'";

mysql_close($con);
session_destroy();

include "footer.php" ?>