<!DOCTYPE html>
<html lang="en">  
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="<?php echo base_url(); ?>assets/css/loginstyle.css" rel='stylesheet' type='text/css' />
  <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <div class="grids">
        <div class="progressbar-heading grids-heading"> 
            <h2>Rate this home</h2>
        </div>
        <div class="forms-grids">
            <div class="forms3">
            <div class="w3agile-validation w3ls-validation">
                <div class="panel panel-widget agile-validation register-form">
                    <div class="validation-grids widget-shadow" data-example-id="basic-forms">
                        <div class="input-info">
                            <h3><?php echo $vacationhouse['name']; ?></h3>
                                <div class="account-info">
                                    <p><b>Description: </b><?php echo $vacationhouse['description']; ?></p>
                                    <p><b>Bedrooms: </b><?php echo $vacationhouse['bedrooms']; ?></p>
                                    <p><b>Bathrooms: </b><?php echo $vacationhouse['bathrooms']; ?></p>     
                                    <p><b>Sleeps: </b><?php echo $vacationhouse['sleeps']; ?></p>   
                                    <p><b>Minimum Stay: </b><?php echo $vacationhouse['minimum_stay']; ?></p>   
                                    <p><b>Pets: </b><?php echo $vacationhouse['pets_allowed']; ?></p>   
                                    <p><b>Price Per Night: €</b><?php echo $vacationhouse['price_per_night']; ?></p>    
                                    <p><b>Price Per Week: €</b><?php echo $vacationhouse['price_per_week']; ?></p>  
                                    <p><b>Damage Deposit: €</b><?php echo $vacationhouse['damage_deposit']; ?></p><br> 
                                    
                                    <h3>Reviews</h3>
                                    <?php foreach ($rating as $rate) { ?>
                                        <p>Name: <?php echo $rate['name'];?></p>
                                        <p>Description: <?php echo $rate['description'];?></p>
                                        <p>Rate: <?php echo $rate['rate'];?></p><br>
                                    <?php }  ; ?> 
                                  
                                    <?php $id = $_GET ['id']; ?>
                                    <form action="" method="post">
                                        <h3> Review form </h3>
                                        <p style="color: white;">Name :</p> <input type="text" class="form-control" placeholder="Your name.." name="name">
                                       <p style="color: white;">Description :</p><textarea type="text" class="form-control " style="margin-bottom: 5px; margin-top: 5px;" placeholder="Your review..." name="description"></textarea>
                                        <p style="color: white;">Rate from 1-5 :</p>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rate" value="1" style="color: white; ">
                                                    1 
                                            </label>
                                        </div> 
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rate" value="2" style="color: white;">
                                                    2
                                            </label>
                                            </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rate" value="3" style="color: white;">
                                                    3
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="rate" value="4" style="color: white;">
                                                    4
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="stratears" value="5" style="color: white;">
                                                    5
                                            </label>
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" >
                                        <input type="submit" name="homeReviewSubmit" class="btn-primary" value="Submit" >
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>