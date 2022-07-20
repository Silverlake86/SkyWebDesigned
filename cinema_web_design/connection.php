<?php

	if (isset($_POST['name'])&&isset($_POST['hp'])&&isset($_POST['email'])&&isset($_POST['message']))
	{
		
		$n = $_POST['name'];
		$p = $_POST['hp'];
		$e = $_POST['email'];
		$m = $_POST['message'];
		
		insertData($n ,$p, $e, $m);
	}

	function selectData()
	{
		$conn= mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($conn, "ti3a7744_michael_salim");
		return mysqli_query($conn, "select * from tugas_projek");
	}

	function insertData($n ,$p ,$e ,$m)
	{
		$conn= mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($conn, "ti3a7744_michael_salim");
		mysqli_query($conn, "INSERT INTO tugas_projek (name, hp, email, message) VALUES('$n', '$p', '$e', '$m')");
		header("Location: cinema.php?page=page20");
	}

?>