<?php
if(isset($_COOKIE["user"])) {
	print "<p>Leave a comment below -- logged in as " . $user . "</p>";
	print "<form action='comment.php' method='get' name='comments' onsubmit='return validatecomment()'><p><textarea name='comment' cols='40' rows='5'>
</textarea><br /><input type='hidden' name='title' value='$title'><input type='submit' value='Comment'></p></form>";
}
?>