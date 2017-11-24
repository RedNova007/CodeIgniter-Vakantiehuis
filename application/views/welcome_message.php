<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
</head>
<body>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="image">
		<div class="search">
			<input type="text2" name="search" placeholder="Search..">
			<input type="text3" name="from" placeholder="From">
			<input type="text3" name="until" placeholder="Until">
			<input type="text3" name="guests" placeholder="Guests">
		</div>
		<?php echo '<img class="homepage_picture" src="data:image/jpeg;base64,'.base64_encode($homepage_picture['picture']) .'" />';?>
	</div><br>
	
	<?php
		foreach ($vacation_homes as $vacation_home)
		{
	?>		
		<div id="homepage_offers">
			<div class="offers">
				
				<img src="data:image/jpeg;base64,<?php echo base64_encode($vacation_home['thumbnail']); ?>"/>
				<p>
					<?= $vacation_home['name']; ?><br>
					<div class="offer_sleeps">
						<?=	$vacation_home['sleeps']?>
					</div>
					<div class="offer_bedrooms">
						<?=	$vacation_home['bedrooms']?>
					</div>
					<div class="offer_bathrooms">
						<?=	$vacation_home['bathrooms']?>
					</div>
				</p>
			</div>
		</div><br>
	<?php
		}	
	?>

	<!--<div>
	   <a class="all_homes" href="homes"><p>All vacation homes</p></a> </li>
	</div>-->

</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</body>
</html>