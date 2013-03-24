
<div class="results"><table>
<?php

$query = $query . " LIMIT 0, $length";
$query = mysql_query($query) or trigger_error("Error: " . mysql_error());

$results = mysql_num_rows($query);
$pages= ceil($results/20);

if($results == 0) {
	print "<tr><td>Sorry, your search returned no results.</td></tr>";
}
else {
	print "<tr><th>Displaying 0 to $length</th><th>Type</th><th>Uploader</th><th>Rating</th></tr>";
	while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
		$title = $row['title'];
		$type = $row['type'];
		$user = $row['user'];
		$date = $row['date'];
		$rating = $row['rating'];
		
		print "<tr><td><a href='link.php?title=$title'>$title</a>
			</td><td>$type</td><td>$user</td><td>$rating</td></tr>";
	}
}
?>
</table></div>