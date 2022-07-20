<link rel="stylesheet" type="text/css" href="css/home.css">
<head>
	<title> HOME </title>
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">
	

	
			
	<div class = "template">
	<div class = "jumbotron masthead">
		<div class="splash" style="display: block;"> <img src="image/home/background3.jpg" alt="Banner"> </div>
	
		<div class="container show-case-item" style="display: block;opacity :1;">
			<h1> CINEMA <br> MOVIE </h1>
			<p class = "font-style"> “Taste the sweet of life” </p>
		</div>
	  
		<div id="banner-pagination">
			<ul>
				<li class="<?php if ($_GET['page'] == "page1") echo "active"?>">
					<a class="active" href="cinema.php?page=page1" rel="0"> 
						<img src="image/home/slidedot.png" alt="slide">
					</a>
				</li>
				<li class="<?php if ($_GET['page'] == "page2") echo "active"?>">
					<a href="cinema.php?page=page2" rel="1"> 
						<img src="image/home/slidedot.png" alt="slide">
					</a>
				</li>
			  <li class="<?php if ($_GET['page'] == "page3") echo "active"?>">
			  <a href="cinema.php?page=page3" rel="1">
				<img src="image/home/slidedot-active.png" alt="slide"></a></li>
			</ul>
		</div>
	</div>
	
	<div class="container">
		
			<h1> WELCOME TO CINEMA MOVIE'S WEBSITE </h1>
				<hr class="soften">
					<div class="row-fluid">
					  <div class="span8">
						<h2> <span class="firstword"> Our </span> Services </h2>
							<p class = "font-style"> Our services are to engaged in serving people to buy tickets, buy food and drinks that will be eaten while watching, 
							and who mainly provide quality films and the latest. And who especially serve customers with pleasure so they 
							feel at happy in this cinema. </p>
							<br>
					
						<div class="span4"> 
							<a href = "cinema.php?page=page5">
								<div class = "ukuran">
									<img src="image/home/tiket.png" >
								</div>
									<h2> <span class="firstword"> BUY </span> TICKET </h2>
							</a>
							<p class = "font-style"> Buy tickets and enjoy the movies </p>
						</div>
     
						<div class="span4">
							<a href = "cinema.php?page=page6">
								<div class = "ukuran">
									<img src="image/home/movie.png">
								</div>
									 <h2> <span class="firstword"> WATCH </span> MOVIE </h2>
							</a>
							<p class = "font-style"> See the upcoming movies now </p>
						</div>
						
						<div class="span4">
							<a href = "cinema.php?page=page15">
								<div class = "ukuran">
									<img src="image/home/food.png">
								</div>
									 <h2> <span class="firstword"> BUY </span> BEVERAGE </h2>
							</a>
							<p class = "font-style"> Buy beverages and enjoy it on cinema </p>
						</div> 
					</div>
					
				</div>
				
	</div>
	
	</div>
	
</body>