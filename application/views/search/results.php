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
	   <?php foreach($search as $search_results){ ?>
        <tr>
            <td><?php echo $search_results->name?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>