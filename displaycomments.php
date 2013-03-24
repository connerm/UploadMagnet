<p><table>
<?php

$query = mysql_query("SELECT * FROM comments WHERE name='$title' ORDER BY date ", $con);
if(!$query) {
	die ("<br />Falied to load comments");
}
$count = 0;
while($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
	$user = $row["user"];
	$date = $row["date"];
	$comment = $row["comment"];
	$count= $count + 1;
	
	print "<tr><th><a href='user.php?user=$user'>$user</a> on $date<th></tr><tr><td>$comment<td> </tr>";
		if ($count==20) { 
		break;
	}
}

if($count==0) {
	print "<tr><td>No Comments yet.</td></tr>";
}
?>
</table></p>
