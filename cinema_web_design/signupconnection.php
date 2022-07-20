<?php

	if (isset($_POST['first'])&&isset($_POST['last'])&&isset($_POST['hp'])&&isset($_POST['email'])&&isset($_POST['password']))
	{
		
		$f = $_POST['first'];
		$l = $_POST['last'];
		$p = $_POST['hp'];
		$e = $_POST['email'];
		$pass = $_POST['password'];
		
		insertData($f, $l, $p, $e, md5($pass));
	}

	function selectData()
	{
		$conn= mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($conn, "ti3a7744_michael_salim");
		return mysqli_query($conn, "select * from login");
	}

	function insertData($f ,$l ,$p ,$e, $pass)
	{
		$conn= mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($conn, "ti3a7744_michael_salim");
		mysqli_query($conn, "INSERT INTO login (first, last, hp, email, password) VALUES('$f', '$l', '$p', '$e', '$pass')");
		header("Location: cinema.php?page=page4");
	}

?>