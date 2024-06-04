<!DOCTYPE html>
<?php
    $productsArray=array(0=>"Cookies and Brownies", 1=>"Breads and Pastries", 2=>"Cakes and Pies", 3=>"Birthday Cake", 4=>"Party Box")
?>
<html>
    <head>
        <title>Craft Cookie Cottage Products Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../../css/freelancer.min.css" rel="stylesheet" type="text/css"/> 
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <form class="form-group" action="response.php" method="post">

                    <fieldset>

                        <!-- Form Name -->
                        <legend><h3>Cookies, pastries, and more!</h3></legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-8 control-label" for="Name">Your name:</label>  
                            <div class="col-md-8">
                                <input id="Name" name="Name" type="text" placeholder="Jesse" class="form-control input-md">
                                <span class="help-block">We need your name in order to assign your order to you.</span>  
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-8 control-label" for="Sate">State:</label>  
                            <div class="col-md-8">
                                <input id="State" name="State" type="text" placeholder="AZ" class="form-control input-md">
                                <span class="help-block">Please enter two letter abbreviation of your state. </span>  
                            </div>
                        </div>

                        <label for="product">What products would you like:</label>
                            <select id="product" name="product">
                                <option value="--">--</option>
                                <?php
                                for($i=0;$i< sizeof($productsArray);$i++){
                                print("<option value=".$i.">".$productsArray[$i]."</option>");
                                }
                                ?>
                            </select >

                        <div class="form-group">
 
                            <div class="col-md-8">
                                <input id="Submit" name="Submit" type="submit"  class="form-control input-group-btn">
                                 
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
    </body>
</html>
