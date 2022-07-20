<link rel="stylesheet" type="text/css" href="css/contact.css">

<div class="container">
<div class="main-content">
	
		<div class="row">
			<div class="span12">
				<div class="main-content-block">
					<h2 class="from-bottom" style="opacity: 1; bottom: 0px;">Contact Us</h2>
						<div class="clearfix">&nbsp;</div>
								<div class="main-content-block-entry">
									<div class = "styletulis">
										<p>	Contact us from instagram, facebook, email or contact form. 
											We'll do everything we can to respond to you as quickly as possible. 
											Please be assured,  we will never sell or distribute the personal information you provide to us.
										</p>
											<div class="clearfix">&nbsp;</div>
									</div>
								</div>
				</div>
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
					<h3>Contact Form</h3>	
							<?php include ("connection.php");
							?>
							<script src="js/Queryv3.3.js"></script>
							<script src="js/alert.js" type="text/javascript"></script>
							
							<form action="connection.php" class="magnis-product-item-review" method="post"> 
								<div class ="styletulis">
								<p>
									<label> Full Name <span>*</span></label>
									<input type="text" name="name" required="true">
								</p>
								<p>
									<label> Phone Number <span>*</span></label>
									<input type="text" name="hp" required="true">
								</p>
								<p>
									<label> Email <span>*</span></label>
									<input type="text" name="email" required="true">
								</p>
								<p>
									<label> Message <span>*</span></label>
									<textarea name="message" cols="40" rows="5" required="true"> </textarea>
								</p>
								<input class="button1" type="submit" value="Send" onclick = "ucapan()">  
								</div>
							</form> 
					</div>
					<div class="clearfix">&nbsp;</div>
						<br><br>
				</div>
			</div>
		</div>
	</div>
	</div>