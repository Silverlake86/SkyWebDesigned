<link rel="stylesheet" type="text/css" href="css/home.css">

<head>
	<title> HOME </title>
	<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">  
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Rhodium+Libre&display=swap" rel="stylesheet">
</head>

<body>
<div class = "template">
	<div class = "jumbotron masthead">
		<div class="splash"> 
			<img src="image/home/background5.jpg"> 
		</div>
	
		<!--<div class="container show-case-item">
			<h1> CINEMA <br> MOVIE </h1>
			<p class = "fonthome"> “Cinema is a matter of what’s in the frame and what’s out.” </p>
		</div>-->
	  
		<div id="banner-pagination">
			<ul>
				<li class="<?php if ($_GET['page'] == "page1") echo "active"?>">
					<a class="active" href="cinema.php?page=page1" rel="0"> 
						<img src="image/home/slidedot-active.png" alt="slide">
					</a>
				</li>
				<li class="<?php if ($_GET['page'] == "page2") echo "active"?>">
					<a class="active" href="cinema.php?page=page2" rel="1"> 
						<img src="image/home/slidedot.png" alt="slide">
					</a>
				</li>
			  <li class="<?php if ($_GET['page'] == "page3") echo "active"?>">
			  <a href="cinema.php?page=page3" rel="1">
				<img src="image/home/slidedot.png" alt="slide"></a></li>
			</ul>
		</div>
	</div>
	<br>
	<br>
	<div class="background">
	<div class = "fontstyle-atas">
		<h1> WELCOME TO CINEMA MOVIE'S WEBSITE </h1>
				<hr class="soften">
					
	</div>

	<div class="heading-twenty">
						<h3>Upcoming Movies</h3>
					</div>


		
	 
		<div class="span-gambar-row1"> 
			
				<div class = "ukuran-gambar">
					<img src="image/upcoming/bucin.jpg" class = "image-size">
					<h3 class = "judul-movie"> Bucin </h3>
				</div>
				
				
		</div>

		<div class="span-gambar-row1"> 
			
				<div class = "ukuran-gambar">
					<img src="image/upcoming/tenet.jpg" class = "image-size">
					<h3 class = "judul-movie"> Tenet </h3>
				</div>
				
				
		</div>

		
		<div class="span-gambar-row1"> 
			
				<div class = "ukuran-gambar">
					<img src="image/upcoming/conjuring3.jpg" class = "image-size">
					<h3 class = "judul-movie"> Conjuring 3 </h3>
				</div>
				
				
		</div>

		<div class="span-gambar-row1"> 
			
				<div class = "ukuran-gambar">
					<img src="image/upcoming/crood2.jpg" class = "image-size">
					<h3 class = "judul-movie"> Croods 2 </h3>
				</div>
				
				
		</div>


		<div class="span-gambar-row2"> 
			
			<div class = "ukuran-gambar">
				<img src="image/upcoming/blackwidow.jpg" class = "image-size">
				<h3 class = "judul-movie"> Black Widow </h3>
			</div>
			
			
		
	</div>
 
	<div class="span-gambar-row2"> 
		
			<div class = "ukuran-gambar">
				<img src="image/upcoming/wonderwoman2.jpg" class = "image-size">
				<h3 class = "judul-movie"> Wonder Woman 2 </h3>
			</div>
			
			
	</div>

	<div class="span-gambar-row2"> 
		
			<div class = "ukuran-gambar">
				<img src="image/upcoming/minion.jpg" class = "image-size">
				<h3 class = "judul-movie"> Minions </h3>
			</div>
			
			
	</div>

	
	<div class="span-gambar-row2"> 
		
			<div class = "ukuran-gambar">
				<img src="image/upcoming/onward.jpg" class = "image-size">
				<h3 class = "judul-movie"> Onward </h3>
			</div>
	</div>
		
		
		<div class="span4"> 
			<a href="cinema.php?page=page5">
				<div class = "ukuran">
					<img src="image/home/tiket.png">
			</a>
				</div>
				<h2 class ="h2-style"> <span class="firstword"> BUY </span> TICKET </h2>
			
			<p class = "font-style"> Enjoy the movies with special prices </p>
		</div>
     
		<div class="span4">
			<a href = "cinema.php?page=page6">
				<div class = "ukuran">
					<img src="image/home/movie2.png">
					</a>
				</div>
				<h2 class ="h2-style"> <span class="firstword"> MOVIE </span> SCHEDULE </h2>
			
			<p class = "font-style"> Check the movie schedule </p>
		</div>
						
		<div class="span4">
			<a href="cinema.php?page=page15">
				<div class = "ukuran">
					<img src="image/home/popcorn.png">
					</a>
				</div>
				<h2 class ="h2-style" > <span class="firstword"> BUY </span> BEVERAGE </h2>
			
			<p class = "font-style"> Buy beverages and enjoy it on cinema </p>
		</div> 

	</div>

	
</div>	
</body>
