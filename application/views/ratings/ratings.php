<!DOCTYPE html>
<html lang="en">  
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="<?php echo base_url(); ?>assets/css/loginstyle.css" rel='stylesheet' type='text/css' />

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
                            <?php $id = $_GET ['id']; ?>
                            <form action="" method="post">
                               <!--  <?php var_dump($vacationhouse); ?> -->
                                <input type="text" class="form-control" onpaste="return false;" style="margin-bottom: 5px;" placeholder="Your review..." name="description" >
                                <input type="number" class="form-control" onpaste="return false;"s onkeydown="return event.which >= 8 && event.which <= 53" placeholder="Rate with stars 1-5" name="stars" >
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
</body>
</html>