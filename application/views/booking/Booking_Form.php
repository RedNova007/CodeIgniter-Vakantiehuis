<?php $id = $_GET ['id']; ?> 

<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>assets/css/loginstyle.css" rel='stylesheet' type='text/css' />
<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
</head>
<body>
<div class="container">
    <!-- validation -->
  <div class="grids">
    <div class="progressbar-heading grids-heading">
      
      <h2>Booking:</h2>
    </div>
    <div class="forms-grids">
      <div class="forms3">
      <div class="w3agile-validation w3ls-validation">
        <div class="panel panel-widget agile-validation register-form">
          <div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
            <div class="input-info">
              <h3></h3>
            </div>
            <div class="form-body form-body-info">
              <form action="" method="post">  
                <div class="form-group valid-form">
                  <input type="hidden" class="form-control" name="vacation_home_id" maxlength="30" placeholder="" required="" value="<?php echo "$id"; ?>">                   
                  <?php echo form_error('vacation_home_id','<span class="help-block">','</span>'); ?>
                </div>
                <p class="regi_form">Name</p>
                <div class="form-group valid-form">
                  <input type="text" class="form-control" name="booking_name" maxlength="30" placeholder="First Name/Last Name" required="" value="<?php echo !empty($Booking['booking_name'])?$Booking['booking_name']:''; ?>">
                    <div class="regi_button">!
                      <span class="info-hover">Insert your name, for example 'Jan de vries'</span>
                    </div>
                  <?php echo form_error('booking_name','<span class="help-block">','</span>'); ?>
                </div>
                <p class="regi_form">E-mail</p>
                <div class="form-group has-feedback">
                  <input type="email" cols="250" class="form-control" name="booking_email" maxlength="200" placeholder="Myname@exemple.com" data-error="E-mail is invalid" required="" value="<?php echo !empty($Booking['booking_email'])?$Booking['booking_email']:''; ?>">
                    <div class="regi_button">!
                      <span class="info-hover">Insert your email, for example 'Jandevries@gmail.com'</span>
                    </div>
                  <?php echo form_error('E-mail','<span class="help-block">','</span>'); ?>
                </div>    
              <br />
              
                <div class="selectbox">
                  <p class="regi_form">Number of Guests:</p>
                  <select name="booking_guests" value="booking_guests" required="">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                  </select> 
                </div> 
              <br />   
              <br />  
                <p class="regi_form">Arrival Date</p>
                <div class="form-group valid-form">
                  <input type="date" class="form-control" name="arrival" maxlength="30" required="" value="<?php echo !empty($Booking['arrival'])?$Booking['arrival']:''; ?>">
                    <div class="regi_button">!
                      <span class="info-hover">When you want to arrive'</span>
                    </div>                  
                  <?php echo form_error('arrival','<span class="help-block">','</span>'); ?>
                </div>   
              <br />
                <p class="regi_form">Departure Date</p>
                <div class="form-group valid-form">
                  <input type="date" class="form-control" name="departure" maxlength="30" required="" value="<?php echo !empty($Booking['departure'])?$Booking['departure']:''; ?>">
                    <div class="regi_button">!
                      <span class="info-hover">When you want to Departure'</span>
                    </div>  
                  <?php echo form_error('departure','<span class="help-block">','</span>'); ?>
                </div>   
              <br />
                <div class="form-group">
                  <p class="regi_form">Free Pickup?</p>
                    <?php
                    if(!empty($Booking['booking_pickup']) && $Booking['booking_pickup'] == 'Yes'){
                      $fcheck = 'checked="checked"';
                      $mcheck = '';
                    }else{
                      $mcheck = 'checked="checked"';
                      $fcheck = '';
                    }
                    ?>
                    <div class="radio">
                      <label>
                      <input type="radio" name="booking_pickup" value="Yes" <?php echo $mcheck; ?>>
                      Yes
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="booking_pickup" value="No" <?php echo $fcheck; ?>>
                        No
                      </label>
                    </div>
                </div>
              <br />
              <br />
                  <p class="regi_form">Special Requests</p>
                <div class="form-group valid-form">
                  <input type="text" class="form-control" name="booking_requests" maxlength="500" placeholder="Any special requests?" required="" value="<?php echo !empty($Booking['booking_requests'])?$Booking['booking_requests']:''; ?>"> 
                  <?php echo form_error('booking_requests','<span class="help-block">','</span>'); ?>
                </div>
                <div class="form-group">
                  <input type="submit" name="bookingSubmit" class="btn-primary" value="Submit"/>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"> </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>