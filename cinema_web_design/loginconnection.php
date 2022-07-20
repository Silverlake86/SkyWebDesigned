<?php
    $email = $_POST['email'];
    $password =md5($_POST['password']);
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "ti3a7744_michael_salim");

    $result = mysqli_query($con, "SELECT * FROM login WHERE email = '$email';")
    or die("Failed to query database. ".mysqli_error());
    $row = mysqli_fetch_array($result);
	
	if ($row > 0) {
		if($row['password'] == $password)
		{
			header("Location: cinema.php?page=page17");
			exit();
		}else {
			echo "Failed to Login!";
		}
	}	
	else
    {
        $message = "Wrong email or password !";
		echo "<script type='text/javascript'>alert('$message');</script>";
    } 
	
	
?>