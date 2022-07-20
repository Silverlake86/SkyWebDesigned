<link rel="stylesheet" type="text/css" href="css/buy.css">

<div class="main-content">
	<div class="container">
		<div class="row">
			
		</div>
	</div>
</div>

<div class="clearfix">
</div>

<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="main-content-block-entry">
					<h3>Buy ticket</h3>	
							<script src="js/Queryv3.3.js"></script>
							<script src="js/alert.js" type="text/javascript"></script>
							
							<form action="buyconnection.php" class="magnis-product-item-review" method="post"> 
								<div class ="styletulis">
								<p>
									<label for="cars"> Movie </label>:
									<select class = "tulisan" name="movie" id="movie">
										<option name ="movie" value="Trolls World Tour">Trolls World Tour</option>
										<option name ="movie" value="Itaewon Class">Itaewon Class</option>
										<option name ="movie" value="Saint Seiya">Saint seiya</option>
									</select>
								</p>
										
								<p>
									<label for="time"> Time </label>: 
									<select class = "tulisan" name="time" id="time">
										<option name ="time" value="09.00">09.00</option>
										<option name ="time" value="13.00">13.00</option>
										<option name ="time" value="16.00">16.00</option>
										<option name ="time" value="19.00">19.00</option>
									</select>
								</p>
								
								<p>
									<label> Tickets </label>: 
									<input type="text"  maxlength="2" name="ticket" required="true">
								</p>
								
								<input class="button1" type="submit" value="Checkout" onclick = "thankyou()">  
								</div>
							</form> 
					</div>
					<div class="clearfix">&nbsp;</div>
						<br><br>
				</div>
			</div>
		</div>
	</div>