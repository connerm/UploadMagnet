<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-US" />
<title>Login</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="validations.js"></script>
</head>

<?php include 'header.php' ?>

<h1>Login</h1>
<p>Login to your account here. If you do not yet have an account <a href="usercreate.php">register</a><br /></p>
<form name="login" action="profile.php" method="post" onsubmit="return validatelogin()"><p>
<label for="user" />User name: <input type="text" name="user" /><br />
<label for="pass" />Password: <input type="password" name="pass" /><br />
<input type="submit" name="submit" value="Login"  />
</p></form>

<? include "footer.php" ?>
