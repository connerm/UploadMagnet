<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-US" />
<title>UpLoad</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="validations.js"></script>
</head>

<?php include 'header.php';
print "<h1>Upload</h1>";
if(!isset($_COOKIE["user"])) {
	print "<div class='alert'><p>You must be logged in to upload<br /></p></div>";
}
else {
	print "<p>Upload a Magnet Link:<br /></p>";
}
?>

<form name="upload" action="uploadreturn.php" method="get" onsubmit="return validateupload()">
<p>Title: <input type="text" name="title" />
Magnet Link: <input type="text" name="link" />
Type: <select name="type">
<option value="Movies">Movies</option>
<option value="TV">TV</option>
<option value="Music">Music</option>
<option value="Games">Games</option>
<option value="Other">Other</option>
</select><br />
Information:<br />
<textarea name='information' cols='50' rows='8'>
</textarea>
<br />
<img id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image" /><br />
Enter Answer: <input type="text" name="captcha_code" size="10" maxlength="6" />
<a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">
Different Image</a>
<br />
<input type="submit" value="submit" />
</p></form>

<? include "footer.php" ?>
