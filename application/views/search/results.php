<!DOCTYPE html>
<html>
<head>
	<title>Search results</title>
	<link href="<?php echo base_url(); ?>assets/css/loginstyle.css" rel='stylesheet' type='text/css' />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
</head>
<body>
    <div class="container">
    <!-- validation -->
    <div class="grids">
        <div class="progressbar-heading grids-heading"> 
            <h2>Search results</h2>
        </div>
        
        <div class="forms-grids">
            <div class="forms3">
            <div class="w3agile-validation w3ls-validation">
                <div class="panel panel-widget agile-validation register-form">
                    <div class="validation-grids widget-shadow" data-example-id="basic-forms">
                        <table class="all_homes">
                            <tr>
                                <th>Found <?=count($searchResults);?> vacation home(s).</th>
                            </tr>
	                       <?php 
                            if ($searchResults != null){
                                foreach($searchResults as $searchResult){ ?>
                                <tr>
                                    <td><a class="hoverhomes" href="<?php echo base_url(); ?>Homes/houseOverview?id=<?php echo($searchResult->vacation_home_id)?>"> <?=$searchResult->name?> </a></td>
                                </tr>
                                <?php 
                                    }
                                    }else{ 
                                    echo "No results";
                                }
                            ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        
</body>
</html>