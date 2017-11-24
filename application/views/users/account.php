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
			<h2><?php echo $user ['role']; ?> Account</h2>
		</div> 
		
		<div class="forms-grids">
			<div class="forms3">
			<div class="w3agile-validation w3ls-validation">
				<div class="panel panel-widget agile-validation register-form">
					<div class="validation-grids widget-shadow" data-example-id="basic-forms">
												<a href="<?php echo base_url(); ?>users/logout" class="logoutBtn">Logout</a>
						<div class="input-info">
							<h3>Welcome <?php echo $user['name']; ?>!</h3>
						</div>
						<div class="account-info">
							<p><b>Name: </b><?php echo $user['name']; ?></p>
							<p><b>Email: </b><?php echo $user['email']; ?></p>
							<p><b>Phone: </b><?php echo $user['phone']; ?></p>
							<p><b>Gender: </b><?php echo $user['gender']; ?></p>
							<?php if ($user['role'] == 'Owner'){?>
							<a href="<?php echo base_url(); ?>HouseOverview/house" ><button class="btn-primary">Your homes</button></a>
							<a href="<?php echo base_url(); ?>HouseOverview/register"><button class="btn-primary">Register a Vacationhouse</button></a>
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