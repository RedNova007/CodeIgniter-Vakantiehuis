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
                Name *
                <div class="form-group valid-form">
                  <input type="text" class="form-control" name="booking_name" maxlength="30" placeholder="First Name/Last Name" required="" value="<?php echo !empty($Booking_model['booking_name'])?$Booking_model['booking_name']:''; ?>">
                  <?php echo form_error('booking_name','<span class="help-block">','</span>'); ?>
                </div>
                E-mail *
                <div class="form-group has-feedback">
                  <input type="email" cols="250" class="form-control" name="booking_email" maxlength="200" placeholder="Myname@exemple.com" data-error="E-mail is invalid" required="" value="<?php echo !empty($Booking_model['booking_email'])?$Booking_model['booking_email']:''; ?>">
                  <?php echo form_error('E-mail','<span class="help-block">','</span>'); ?>
                </div>    
              <br />
              
                <div class="selectbox">
                  Number of Guests: *<br />
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
                Arrival Date *
                <div class="form-group valid-form">
                  <input type="date" class="form-control" name="arrival" maxlength="30" required="" value="<?php echo !empty($Booking_model['arrival'])?$Booking_model['arrival']:''; ?>">
                  <?php echo form_error('arrival','<span class="help-block">','</span>'); ?>
                </div>   
              <br />
                Departure Date *
                <div class="form-group valid-form">
                  <input type="date" class="form-control" name="departure" maxlength="30" required="" value="<?php echo !empty($Booking_model['departure'])?$Booking_model['departure']:''; ?>">
                  <?php echo form_error('departure','<span class="help-block">','</span>'); ?>
                </div>   
              <br />
                <div class="form-group">
                  Free Pickup? * 
                    <?php
                    if(!empty($Booking_model['booking_pickup']) && $Booking_model['booking_pickup'] == 'Yes'){
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
                  Special Requests *
                <div class="form-group valid-form">
                  <input type="text" class="form-control" name="booking_requests" maxlength="500" placeholder="Any spacial requests?" required="" value="<?php echo !empty($Booking_model['booking_requests'])?$Booking_model['booking_requests']:''; ?>">
                  <?php echo form_error('booking_requests','<span class="help-block">','</span>'); ?>
                </div>
                <div class="form-group">
                  <input type="submit" name="regisHomeSubmit" class="btn-primary" value="Submit"/>
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