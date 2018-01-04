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
			<h2>Home</h2>
		</div>
		
		<div class="forms-grids">
			<div class="forms3">
			<div class="w3agile-validation w3ls-validation">
				<div class="panel panel-widget agile-validation register-form">
					<div class="validation-grids widget-shadow" data-example-id="basic-forms">
						<div class="input-info">
							<h3>Your vacationhomes</h3>
						</div><br><br>
						<div class="account-info">

							<?php foreach ($vacationhouse as $vac ) 

								{ ?>	
									<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($vac['thumbnail']) .'" />';?>
									<div class="vakantiehuis_info">			
									<p><b>Name: </b><?php echo $vac['name']; ?></p>
									<p><b>Description: </b><?php echo $vac['description']; ?></p>
									<p><b>Bedrooms: </b><?php echo $vac['bedrooms']; ?></p>
									<p><b>Bathrooms: </b><?php echo $vac['bathrooms']; ?></p>		
									<p><b>Sleeps: </b><?php echo $vac['bathrooms']; ?></p>	
									<p><b>Minimum Stay: </b><?php echo $vac['minimum_stay']; ?></p>	
									<p><b>Pets: </b><?php echo $vac['pets_allowed']; ?></p>	
									<p><b>Price Per Night: €</b><?php echo $vac['price_per_night']; ?></p>	
									<p><b>Price Per Week: €</b><?php echo $vac['price_per_week']; ?></p>	
									<p><b>Damage Deposit: €</b><?php echo $vac['damage_deposit']; ?></p>
									<br><br><br><br>
									</div>	 

							<?php } ?>		
						
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