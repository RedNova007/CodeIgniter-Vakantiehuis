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
			<h2>User Registration</h2>
		</div>
		 
		<div class="forms-grids">
			<div class="forms3">
			<div class="w3agile-validation w3ls-validation">
				<div class="panel panel-widget agile-validation register-form">
					<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
						<div class="input-info">
							<h3>Register Form :</h3>
						</div>
						<div class="form-body form-body-info">
							<form action="" method="post">					
								<div class="form-group valid-form">
									<p class="regi_form"> Name * </p>
									<input type="text" class="form-control" name="name" placeholder="Your name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
									<div class="regi_button">!
										<span class="info-hover">Insert your full name, for example 'Jan de vries</span>
									</div>
									<?php echo form_error('name','<span class="help-block">','</span>'); ?>

								</div>
								<div class="form-group has-feedback">
									<p class="regi_form"> Email * </p>
									<input type="email" class="form-control inputEmail" name="email" placeholder="Example@gmail.com" data-error="That email address is invalid" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
									<div class="regi_button">!
										<span class="info-hover">Insert your email, for example 'Jandevries@gmail.com</span>
									</div>
									<?php echo form_error('email','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group valid-form">
									<p class="regi_form"> Phonenumber * </p>
									<input type="text" onkeydown="return event.which >= 8 && event.which <= 57" class="form-control" name="phone" placeholder="06123456789" required="" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
									<div class="regi_button">!
										<span class="info-hover">Insert your phonenumber, for example '06123456789</span>
									</div>
								</div>
								<div class="form-group">
									<p class="regi_form"> Password * </p>
								  <input type="password" class="form-control inputPassword" name="password" placeholder="Password" required="">
								  <div class="pw_button">!
										<span class="info-hover">Insert your password.</span>
									</div>
								  <?php echo form_error('password','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group">
								  <input type="password" class="form-control" data-match=".inputPassword" data-match-error="Whoops, these don't match" name="conf_password" placeholder="Confirm password" required="">
								  <div class="pwcf_button">!
										<span class="info-hover">This is an input where you comfirm your password</span>
									</div>
								  <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
								  <br>
								</div>
								<div class="form-group">
									<?php
									if(!empty($user['gender']) && $user['gender'] == 'Female'){
										$fcheck = 'checked="checked"';
										$mcheck = '';
									}else{
										$mcheck = 'checked="checked"';
										$fcheck = '';
									}
									?>
									<div class="radio">
										<label>
										<input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
										Male
										</label>
									</div>
									<div class="radio">
										<label>
										  <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
										  Female
										</label>
									</div>
								</div>
									<div class="form-group valid-form">
									<?php
									if(!empty($user['role']) && $user['role'] == 'Owner'){
										$fcheck = 'checked="checked"';
										$mcheck = '';
									}else{
										$mcheck = 'checked="checked"';
										$fcheck = '';
									}
									?>
									<div class="radio">
										<label>
										<input type="radio" name="role" value="Owner" <?php echo $mcheck; ?>>
										Owner
										</label>
									</div>
									<div class="radio">
										<label>
										  <input type="radio" name="role" value="Renter" <?php echo $fcheck; ?>>
										  Renter
										</label>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" name="regisSubmit" class="btn-primary" value="Submit"/>
								</div>
							</form>
						</div>
						<p class="footInfo">Already have an account? <a href="<?php echo base_url(); ?>users/login">Login here</a></p>
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