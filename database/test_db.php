<?php 

	include 'db_connect.php';
	$link = openConnection();

	// $myquery = createQuery($link, 'SELECT product from ssu');
	$query = 
<<<SQL
    SELECT *
    FROM `ssu`
    WHERE `nav` < 1200
SQL;
	
	
	if(!$result = createQuery($link, $query)){
    	die('There was an error running the query [' . $link->error . ']');
	}

	while($row = $result->fetch_assoc()){
		echo "<table border='1'>";
		echo "<tr>";
    	echo "<td>" . $row['id'] . "</td>";
    	echo "<td>" . $row['product'] . "</td>";
    	echo "<td>" . $row['date'] . "</td>";
    	echo "<td>" . $row['nav'] . "</td>";
    	echo "</tr>";
    	echo "</table>";
	}

	echo 'Success!';


	closeConnection($link);


 ?>

