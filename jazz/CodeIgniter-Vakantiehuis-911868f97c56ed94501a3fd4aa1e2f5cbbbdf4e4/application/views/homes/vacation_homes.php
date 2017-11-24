<!DOCTYPE html>
<html>
<head>
	<title>Available offers</title>
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
</head>
<body>
	<div>
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
				foreach($vacation_homes as $vacation_home) 
				{
			?>
				<tr>
					<td>
					<a href="<?php echo base_url(); ?>Homes/houseOverview?id=<?php echo($vacation_home['id'])?>"> <?=$vacation_home['name']?> </a>
					<?php 
		

					?>
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
</body>
</html>