<!DOCTYPE html>
<html>
<head>
	<title>Search results</title>
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
</head>
<body>
	<?php 
		$query = $_POST['query'];

		$min_length = 3;

		if(strlen($query) >= $min_length){ // if the query length is more or equal than the minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM vacation_homes
        WHERE (`name` LIKE '%".$query."%') OR (`description` LIKE '%".$query."%')") or die(mysql_error());
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello".
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
        while($results = mysql_fetch_array($raw_results)){
        // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
        echo "<p><h3>".$results['name']."</h3>".$results['description']."</p>";
        // posts results gotten from database(title and text) you can also show id ($results['id'])
        }
	}
    else{ // if there is no matching rows do following
        	echo "No results";
        }
    }        	 
    else{ // if query length is less than minimum
        	echo "Minimum length is ".$min_length;
    	}
	?>
</body>
</html>