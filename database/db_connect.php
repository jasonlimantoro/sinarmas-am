<?php 
	
	function openConnection() {
		$db_host = 'localhost';
		$db_user = 'root';
		$db_pass = '';
		$db_name = 'NAB';

		$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
		if (!$connect) {
			die('Could not connect: ' . $connect->error);
		}

		if (!mysql_select_db('NAB')) {
			die('Could not select database: ' . mysql_error());

		}
		return $connect;

	}

	function createQuery($connection, $query){
		$result = mysqli_query($connection, $query);
		if (!$result) {
			die('Could not query:' . mysqli_error());
		}
		return $result;
	}

	function closeConnection($db) {
		mysqli_close($db);
	}
	
?>