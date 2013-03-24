<body>
<div id="bar"><div class="top">
<ul>
<li><a href="index.php">Upload Magnet</a></li>
<li><a href="browse.php">Browse</a></li>
<li><a href="upload.php">Upload</a></li>
<li><a href="recent.php">Recent</a></li>
<?php 
if(isset($_COOKIE["user"])) {
	$user = $_COOKIE["user"];
	print "<li><a href='profile.php?'>$user</a></li>";
}
else {
	print "<li><a href='login.php'>Login</a></li>";
	print "<li><a href='usercreate.php'>Register</a></li>";
}
?>
</ul>

<form class="search" name="search" action="search.php" method="get" onSubmit="return validatesearch()">
<input type="text" name="searchterm" id="searchbox" placeholder="Search for Magent Links"/>
<input type="submit" value="Magnet Search"  id="searchbutton"/>
</form></div></div>

<div class="content">

