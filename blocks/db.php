<?php
	$mysqli = mysqli_connect('localhost','root','1076891','clients') or die ('Unable to connect with MySQl.');
	$result = $mysqli->prepare("SELECT 'id','firs_name','last_name','age' FROM 'clientsinfo' ORDER BY 'id' DESC");
	echo ("<table border = '1'>");
	echo ("<tr><td>ID</td><td>Firs name</td><td>Last Name</td><td>Age</td></tr>");
	while ($tablerows->mysql_fetch_row($result))
	{
		echo ("
				<tr>
					<td><a>$tablerows[1]</a></td>
					<td>$tablerows[2]</td>
					<td>$tablerows[3]</td>
					<td>$tablerows[4]</td>
				</tr>
			");
	}
	echo ("</table>");
	$mysqli->close();
?>