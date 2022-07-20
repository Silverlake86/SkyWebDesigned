<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> <?php
			if (isset($_GET['page'])&& $_GET['page'] == "page1") echo "Home";
			else if (isset($_GET['page'])&& $_GET['page'] == "page2") echo "Home";
			else if (isset($_GET['page'])&& $_GET['page'] == "page3") echo "Home";
			else if (isset($_GET['page'])&& $_GET['page'] == "page4") echo "Login";
			else if (isset($_GET['page'])&& $_GET['page'] == "page5") echo "Now Playing";
			else if (isset($_GET['page'])&& $_GET['page'] == "page6") echo "Upcoming";
			else if (isset($_GET['page'])&& $_GET['page'] == "page7") echo "Info";
			else if (isset($_GET['page'])&& $_GET['page'] == "page8") echo "Info";
			else if (isset($_GET['page'])&& $_GET['page'] == "page9") echo "Info";
			else if (isset($_GET['page'])&& $_GET['page'] == "page10") echo "Info";
			else if (isset($_GET['page'])&& $_GET['page'] == "page11") echo "Info";
			else if (isset($_GET['page'])&& $_GET['page'] == "page12") echo "News";
			else if (isset($_GET['page'])&& $_GET['page'] == "page13") echo "Info News";
			else if (isset($_GET['page'])&& $_GET['page'] == "page14") echo "Info News";
			else if (isset($_GET['page'])&& $_GET['page'] == "page15") echo "Food & Beverage";
			else if (isset($_GET['page'])&& $_GET['page'] == "page16") echo "Sign up";
			else if (isset($_GET['page'])&& $_GET['page'] == "page17") echo "Buy";
			else if (isset($_GET['page'])&& $_GET['page'] == "page18") echo "Buy";
			else if (isset($_GET['page'])&& $_GET['page'] == "page20") echo "Contact";
		?>
		</title>
		<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
	
	</head>
	
	<body>
	<?php include ('header.php');
	?>
	
	<?php
			if (isset($_GET['page'])&& $_GET['page'] == "page1") include ('home.php');
			else if (isset($_GET['page'])&& $_GET['page'] == "page2") include ('home2.php');
			else if (isset($_GET['page'])&& $_GET['page'] == "page3") include ('home3.php');
			else if (isset($_GET['page'])&& $_GET['page'] == "page4") include ('login.php');
			else if (isset($_GET['page'])&& $_GET['page'] == "page5") include ('playing.php');
			else if (isset($_GET['page'])&& $_GET['page'] == "page6") include ('upcoming.php');
			else if (isset($_GET['page'])&& $_GET['page'] == "page7") include ('info1.php');
			else if (isset($_GET['page'])&& $_GET['page'] == "page8") include ('info2.php');
			else if (isset($_GET['page'])&& $_GET['page'] == "page9") include ('info3.php');
			else if (isset($_GET['page'])&& $_GET['page'] == "page10") include ('info4.php');
			else if (isset($_GET['page'])&& $_GET['page'] == "page11") include ('info5.php');	
			else if (isset($_GET['page'])&& $_GET['page'] == "page12") include ('news.php');	
			else if (isset($_GET['page'])&& $_GET['page'] == "page13") include ('infonews1.php');	
			else if (isset($_GET['page'])&& $_GET['page'] == "page14") include ('infonews2.php');	
			else if (isset($_GET['page'])&& $_GET['page'] == "page15") include ('beverage.php');	
			else if (isset($_GET['page'])&& $_GET['page'] == "page16") include ('signup.php');	
			else if (isset($_GET['page'])&& $_GET['page'] == "page17") include ('buy.php');	
			else if (isset($_GET['page'])&& $_GET['page'] == "page18") include ('buy2.php');	
			else if (isset($_GET['page'])&& $_GET['page'] == "page20") include ('contact.php');	
		?>
		
	<?php include ('footer.php');
		?>
</body>
</html>