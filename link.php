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

$title = mysql_real_escape_string($_REQUEST["title"]);
$query = mysql_query("SELECT * FROM magnetlinks WHERE title = '$title'") 
or die ("Error: " . mysql_error());

$row = mysql_fetch_row($query, MYSQL_ASSOC);
$link = $row['link'];
$type = $row['type'];
$user = $row['user'];
$date = $row['date'];
$rating = $row['rating'];
$info = $row['info'];

print "<h1>$title</h1>";
print "<p>Type: $type <br />Upload Date: $date <br />Uploader: <a href='user.php?user=$user'>$user</a><br />";

if(isset($_COOKIE["user"])) {
	print "Rating: [$rating]<br />		<a href='rating.php?rate=1&title=$title'>Up</a> <a href='rating.php?rate=-1&title=$title'>Down</a><br />";
	if($_COOKIE["user"] == $user) {
		print "<div id='alert'><p>This is your torrent, you may <a href='delete.php?title=$title'>delete</a> or edit it.</p></div>";
	}
}
else {
	print "<div id='alert'><p>You must be logged in to rate or comment</div>";
}
print "<p><a href='$link'>Download</a><br /><div id='info'>$info</div></p>";

include_once "addcomment.php";
include "displaycomments.php";

mysql_close($con);

include "footer.php" ?>