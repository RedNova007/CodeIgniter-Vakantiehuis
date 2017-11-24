<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script>
  	$( function() {
    	$( "#arrival" ).datepicker();
  	} );
  	$( function() {
    	$( "#departure" ).datepicker();
  	} );
  </script>
</head>
<body>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="image">
		<div class="search">
			<form  method="post" action="index.php/search/results"  method="POST"> 
				<input type="text2" name="query" placeholder="Search.." pattern=".{3,}" required title="iets">
				<input type="text3" id="arrival" name="query2" placeholder="From">
				<input type="text3" id="departure" name="query3" placeholder="Until">
				<input type="text3" name="query4" placeholder="Guests">
				<input type="submit" name="go" value="Go">
			</form>
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
				<p class="offer_info">
					<?= $vacation_home['name']; ?><br>
					<div class="offer_sleeps">
						<p><?=	$vacation_home['sleeps']?></p>
					</div>
					<div class="offer_bedrooms">
						<p><?=	$vacation_home['bedrooms']?></p>
					</div>
					<div class="offer_bathrooms">
						<p><?=	$vacation_home['bathrooms']?></p>
					</div>
					<div class="offer_price">
						<p>€<?=	$vacation_home['price_per_night']?>/night</p>
					</div>
				</p>
			</div>
		</div><br>
	<?php
		}	
	?>

	<div class="all_homes">
		<p>
	   		<a href="homes"><p>See all vacation homes</p></a>
		</p>
	</div>

</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</body>
</html>