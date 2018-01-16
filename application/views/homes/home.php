<!DOCTYPE html>
<html lang="en">  
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="<?php echo base_url(); ?>assets/css/loginstyle.css" rel='stylesheet' type='text/css' />
  <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <!-- validation -->
	<div class="grids">
		<div class="progressbar-heading grids-heading"> 
			<h2>Home</h2>
		</div>
		<?php 
		 ?>
		<div class="forms-grids">
			<div class="forms3">
			<div class="w3agile-validation w3ls-validation">
				<div class="panel panel-widget agile-validation register-form">
					<div class="validation-grids widget-shadow" data-example-id="basic-forms">
						<div class="input-info">
							<h3><?php echo $vacationhouse['name']; ?></h3>
						</div>        
						<div class="container">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
							    <ol class="carousel-indicators">
							      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							      <li data-target="#myCarousel" data-slide-to="1"></li>
							      <li data-target="#myCarousel" data-slide-to="2"></li>
							    </ol>
						    	<div class="carousel-inner">
						      		<div class="item active">
						        		<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($vacationhouse['thumbnail']) .'"  style="width:100%; />';?>
						      		</div>
							      	<div class="item">
							        	<img src="assets/css/testafbeeldingen/forest.jpg" style="width:100%;">
							      	</div>
							    
							      	<div class="item">
							        	<img src="testafbeeldingen/forest3.jpg" style="width:100%;">
							      	</div>
						    	</div>
							    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
							      <span class="glyphicon glyphicon-chevron-left"></span>
							      <span class="sr-only">Previous</span>
							    </a>
							    <a class="right carousel-control" href="#myCarousel" data-slide="next">
							      <span class="glyphicon glyphicon-chevron-right"></span>
							      <span class="sr-only">Next</span>
							    </a>
						    </div>
						</div>
						
						<div class="account-info">						 									
							<p><b>Description: </b><?php echo $vacationhouse['description']; ?></p>
							<p><b>Bedrooms: </b><?php echo $vacationhouse['bedrooms']; ?></p>
							<p><b>Bathrooms: </b><?php echo $vacationhouse['bathrooms']; ?></p>		
							<p><b>Sleeps: </b><?php echo $vacationhouse['sleeps']; ?></p>	
							<p><b>Minimum Stay: </b><?php echo $vacationhouse['minimum_stay']; ?></p>	
							<p><b>Pets: </b><?php echo $vacationhouse['pets_allowed']; ?></p>	
							<p><b>Price Per Night: €</b><?php echo $vacationhouse['price_per_night']; ?></p>	
							<p><b>Price Per Week: €</b><?php echo $vacationhouse['price_per_week']; ?></p>	
							<p><b>Damage Deposit: €</b><?php echo $vacationhouse['damage_deposit']; ?></p>		
							<a href="<?php echo base_url(); ?>Score/reviews"><button class="btn-primary">Score & Reviews</button></a>						
							<a href="<?php echo base_url(); ?>Booking/index?id=<?php echo($vacationhouse['id'])?>"><button class="btn-primary">Price & Book</button></a>							
						</div>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
	</div>
	<!-- //validation -->
</div>
</body>
</html>