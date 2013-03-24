<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-US" />
<title>Rating</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="validations.js"></script>
</head>

<?php
include 'header.php';
include_once 'connectdb.php';

$rating = $_GET["rate"];
$rating = mysql_real_escape_string($rating);
$title = $_GET["title"];
$title = mysql_real_escape_string($title);

$update = "UPDATE magnetlinks SET rating= rating + '$rating' WHERE title='$title'";

mysql_query($update, $con);
if(!$update) {
	die("ERROR: "  . mysql_error());
}

mysql_close($con);
?>
<div id='centertext'><p>Thanks for rating <br />
Click <a href='javascript:history.go(-1)'>here</a> to return</p></div>

<? include "footer.php" ?>