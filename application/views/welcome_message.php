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
			<form  method="post" action="search/results"  method="POST"> 
                <input type="text" class ="home_inputs search_input" name="query" value="<?php echo html_escape($query = null); ?>" placeholder="Search..">
                <input type="date" min="<?php echo date("Y-m-d"); ?>" class ="home_inputs" name="query2" value="<?php echo html_escape($query2 = null); ?>"  placeholder="From">
                <input type="date" min="<?php echo date("Y-m-d"); ?>" class ="home_inputs" name="query3" value="<?php echo html_escape($query3 = null); ?>"  placeholder="Until">
                <input type="number" id="numericOnly" pattern="[1-9]" min="0" max="20" title="You can only type numbers here." class ="home_inputs" name="query4" value="<?php echo html_escape($query4 = null); ?>"  placeholder="Guests">
				<input type="submit" name="go" value="Search">
			</form>
		</div>
		<?php echo '<img class="homepage_picture" src="data:image/jpeg;base64,'.base64_encode($homepage_picture['picture']) .'" />';?>
	</div><br>

	<a href="homes" class="nounderline"><button>See all vacation homes</button></a>
	
	<?php
		foreach ($vacation_homes as $vacation_home)
		{
	?>
		<div class="offers">
			<a class="homeoverview" href="Homes/houseOverview?id=<?php echo $vacation_home['id']?>">
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
						<p>€<?= $vacation_home['price_per_night']?>/night</p>
					</div>
				</p>
			</a>
		</div>
	<br>
<?php
	}	
?>

</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	
<script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous">
</script>

<script>
	$('#numericOnly').keypress(function(e) {
    var a = [];
    var k = e.which;
    
    for (i = 48; i < 58; i++)
        a.push(i);
    
    if (!(a.indexOf(k)>=0))
        e.preventDefault();
	});
</script>
</body>
</html>

