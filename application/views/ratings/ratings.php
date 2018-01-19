<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php $id = $_GET ['id']; ?>
    <form action="" method="post">
       <!--  <?php var_dump($vacationhouse); ?> -->
        <input type="text" placeholder="Your review..." name="description" >
        <input type="number" class="stars" placeholder="Rate with stars 1-5" name="stars" >
        <input type="hidden" name="id" value="<?php echo $id; ?>" >
        <input type="submit" name="homeReviewSubmit" class="btn-primary" value="Submit" >

    </form>
    


    
</body>
</html>