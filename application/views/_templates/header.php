<div id="header" class="header1">
    <!-- navigation -->   
    <div class="logo">
     	logo
    </div>
    <ul class="navigation">
	    <li class="navigation2">
	        <a href="<?php echo base_url(); ?>">Home</a></li>
	    <li class="navigation2" >
	       	<a href="<?php if($this->session->userdata('isUserLoggedIn')){ echo base_url(); ?>users/account">Account</a></li>
	    <li class="navigation2">
	      	<a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
	    <?php }else{ ?>
	    <li class="navigation2">
	      	<a href="<?php echo base_url(); ?>users/registration">Register</a></li>
	    <li class="navigation2">
	        <a href="<?php echo base_url(); ?>users/login">Login</a></li>
	    <?php } ?>
    </ul>
</div>