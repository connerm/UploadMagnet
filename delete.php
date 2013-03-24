<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-US" />
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="validations.js"></script>
</head>

<?php
include_once "header.php";
include_once "connectdb.php";

$title = $_GET["title"];
$query = "DELETE FROM magnetlinks WHERE title = '$title'";
if (mysql_query($query)) {
	print "<div id='centertext'>The link $title has been deleted.</div>";
	mysql_query("DELETE FROM comments WHERE title = '$title'");
}
else trigger_error("<div id='centertext'>Error: " . mysql_error()) . "</div>";


include_once "footer.php";