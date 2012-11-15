<?php
	$mysqli = new mysqli('localhost', 'yourUserName', 'yourPassWord', 'yourDatabase');
	$text = $mysqli->real_escape_string($_GET['term']);

	//Todo changer la requête.
	$query = "SELECT label FROM keywords WHERE name LIKE '%$text%' ORDER BY name ASC";
	$result = $mysqli->query($query);
	$json = '[';
	$first = true;
	while($row = $result->fetch_assoc())
	{
	    if (!$first) { $json .=  ','; } else { $first = false; }
	    $json .= '{"value":"'.$row['name'].'"}';
	}
	$json .= ']';
	echo $json;
?>