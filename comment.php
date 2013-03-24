<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-US" />
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="validations.js"></script>
</head>

<?php
include "header.php";
include_once 'connectdb.php';

$comment = $_GET["comment"];
$comment = nl2br($comment);
$comment = mysql_real_escape_string($comment);
$date = time();
$title = $_GET["title"];
$title = mysql_real_escape_string($title);
$user = $_COOKIE["user"];
$user = mysql_real_escape_string($user);

$input = "INSERT INTO comments(comment, user, name) VALUES ('$comment', '$user', '$title')";
if(!mysql_query($input)) {
	die ("Something went terribly wrong! your comment could not be uploaded: " . mysql_error());
}
print "<div id='centertext'><p>Your comment has been added. Click <a href='javascript:history.go(-1)'>here</a> to return</p></div>";

include "footer.php";
?>