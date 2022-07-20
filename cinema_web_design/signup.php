<link rel="stylesheet" type="text/css" href="css/signup.css">

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
					<h3>Login Form</h3>	
							<?php include ("signupconnection.php");
							?>
							
							<form action="signupconnection.php" class="magnis-product-item-review" method="post"> 
								<div class ="styletulis">
								<p>
									<label> First Name <span>*</span></label>
									<input type="text" name="first" required="true">
								</p>
								<p>
									<label> Last Name <span>*</span></label>
									<input type="text" name="last" required="true">
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
									<label for ="pwd"> Password <span>*</span></label>
									<input type="password" id="pwd" name="password" required="true">
								</p>
									
								<input class="button1" type="submit" value="Sign up">  
								</div>
							</form> 
					</div>
					<div class="clearfix">&nbsp;</div>
						<br><br>
				</div>
			</div>
		</div>
	</div>