<?php
$con = mysql_connect("localhost", "test", "123456");
if (!$con) {
	die ("Error: " . mysql_error());
}
if (!mysql_select_db("site", $con)){
	die ('Error: ' . mysql_error());
}
?>