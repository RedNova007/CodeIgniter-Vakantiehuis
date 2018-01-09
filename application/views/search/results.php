<!DOCTYPE html>
<html>
<head>
	<title>Search results</title>
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
        </tr>
	   <?php 
        if ($searchResults != null){
            foreach($searchResults as $searchResult){ ?>
        <tr>
            <td><?php echo $searchResult->name?></td>
        </tr>
        <?php 
            }
        }else{ 
            echo "No results";
        }
        ?>
    </table>
</body>
</html>