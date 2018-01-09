<!DOCTYPE html>
<html>
<head>
	<title>Available offers</title>
	<link href="<?php echo base_url(); ?>assets/css/loginstyle.css" rel='stylesheet' type='text/css' />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
</head>
<body>
	<div class="container">
    <!-- validation -->
	<div class="grids">
		<div class="progressbar-heading grids-heading"> 
			<h2>All accomodations</h2>
		</div>
		
		<div class="forms-grids">
			<div class="forms3">
			<div class="w3agile-validation w3ls-validation">
				<div class="panel panel-widget agile-validation register-form">
					<div class="validation-grids widget-shadow" data-example-id="basic-forms">
						<table>
						  <tr>
						    <th>Name</th>
						    <th>Guests</th>		    
						    <th>Bedrooms</th>
						    <th>Bathrooms</th>
						    <th>Price per night</th>
						    <th>Price per week</th>
						  </tr>
	    					<?php 
								foreach($vacation_homes as $vacation_home) {
							?>
								<tr>
									<td>
									<a href="<?php echo base_url(); ?>Homes/houseOverview?id=<?php echo($vacation_home['id'])?>"> <?=$vacation_home['name']?> </a>
									</td>
									<td>
										<?=$vacation_home['sleeps']?>
									</td>
									<td>
										<?=$vacation_home['bedrooms']?>
									</td>
									<td>
										<?=$vacation_home['bathrooms']?>
									</td>
									<td>
										€<?=$vacation_home['price_per_night']?>
									</td> 
									<td>
										€<?=$vacation_home['price_per_week']?>
									</td>
								</tr>
								<?php
									}
								?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>