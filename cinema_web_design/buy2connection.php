<?php

	if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['food']))
	{
		
		$n = $_POST['name'];
		$e = $_POST['email'];
		$f = $_POST['food'];

		insertData($n, $e, $f);
	}

	function selectData()
	{
		$conn= mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($conn, "ti3a7744_michael_salim");
		return mysqli_query($conn, "select * from beverage");
	}

	function insertData($n, $e, $f) 
	{
		$conn= mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($conn, "ti3a7744_michael_salim");
		mysqli_query($conn, "INSERT INTO beverage (name, email, food) VALUES('$n', '$e', '$f')");
		$food = $_GET['foods'];

		foreach ($food as $foods)
		{
			echo $foods."<br/>";
		
		}
		header("Location: cinema.php?page=page18");
	}

?>

