<?php

	if (isset($_POST['movie'])&&isset($_POST['time'])&&isset($_POST['ticket']))
	{
		
		$m = $_POST['movie'];
		$tm = $_POST['time'];
		$tct = $_POST['ticket'];

		insertData($m, $tm, $tct);
	}

	function selectData()
	{
		$conn= mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($conn, "ti3a7744_michael_salim");
		return mysqli_query($conn, "select * from buy");
	}

	function insertData($m, $tm, $tct) 
	{
		$conn= mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($conn, "ti3a7744_michael_salim");
		mysqli_query($conn, "INSERT INTO buy (movie, time, ticket) VALUES('$m', '$tm', '$tct')");
		header("Location: cinema.php?page=page17");
	}

?>