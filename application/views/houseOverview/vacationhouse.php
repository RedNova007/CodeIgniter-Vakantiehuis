<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>assets/css/loginstyle.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
    <!-- validation -->
	<div class="grids">
		<div class="progressbar-heading grids-heading"> 
			<h2>House</h2>
		</div>
		
		<div class="forms-grids">
			<div class="forms3">
			<div class="w3agile-validation w3ls-validation">
				<div class="panel panel-widget agile-validation register-form">
					<div class="validation-grids widget-shadow" data-example-id="basic-forms">
						<div class="input-info">
							<h3>Welcome</h3>
						</div>
						<div class="account-info">
							<p><b>Name: </b><?php echo $vacationhouse['name']; ?></p>
							<p><b>Description: </b><?php echo $user['description']; ?></p>
							<p><b>Bedrooms: </b><?php echo $user['bedrooms']; ?></p>
							<p><b>Bathrooms: </b><?php echo $user['bathrooms']; ?></p>		
							<p><b>Sleeps: </b><?php echo $user['bathrooms']; ?></p>	
							<p><b>Minimum Stay: </b><?php echo $user['minStay']; ?></p>	
							<p><b>Pets: </b><?php echo $user['pets']; ?></p>	
							<p><b>Price Per Night: </b><?php echo $user['pricePerNight']; ?></p>	
							<p><b>Price Per Week: </b><?php echo $user['pricePerWeek']; ?></p>	
							<p><b>Damage Deposit: </b><?php echo $user['damageDeposit']; ?></p>	
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