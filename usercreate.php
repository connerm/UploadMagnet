<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-US" />
<title>Create an Accoount</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="validations.js"></script>
</head>

<?php include 'header.php' ?>

<h1>Account Creation</h1>
<form name="usercreate" action="usercreatereturn.php" method="post" onsubmit="return validateform();">
<p><label for="username" />Pick a user name (must be at least three letters characters)<br />
<input type="text" name="username" /><br />
<label for="email" />Enter your email address:<br />
<input type="text" name="email" /><br /> <!-- check this -->
<label for="pass1" />Create a password: <br />
<input type="password" name="pass1" /><br />
<label for="pass2" />Retype the password:<br />
<input type="password" name="pass2" /><br />
<img id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image" /><br />
Enter Answer: <input type="text" name="captcha_code" size="10" maxlength="6" />
<a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">
Different Image</a><br />
<input type="submit" value="Create Account"/><br /></p>
</form>

<? include "footer.php" ?>
