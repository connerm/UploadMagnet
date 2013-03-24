<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-US" />
<title>Recent</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="validations.js"></script>
</head>

<?php
include "header.php";

print "<h1>Recent Uploads</h1>";
include_once 'connectdb.php';

$query = "SELECT * FROM magnetlinks ORDER BY date DESC"; 
$length = 20;
include_once "results.php";

mysql_close($con);

include "footer.php" ?>