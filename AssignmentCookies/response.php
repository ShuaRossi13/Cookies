<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
//print_r($_POST);
$Name = htmlentities($_POST['Name']);
$Name = strtolower($Name);
$Name = ucwords($Name);
$State = $_POST['State'];
$Products = $_POST['product'];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Your product information</title>
        <link href="CSS/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-8">
                        <?php
                        //Pick apart productinfo.txt (explode) and put it into an array.
                        $prodArray = explode("\n{", file_get_contents("text/productinfo.txt"));
                        
                        //parse through array to remove unnecessary characters.
                        for($p = 0; $p < sizeof($prodArray); $p++){
                            $prodArray[$p] = str_replace("{", "", $prodArray[$p]);
                            $prodArray[$p] = str_replace("}", "", $prodArray[$p]);
                        }
                        
                        //Pick apart serviceare.txt (explode) and put it into an array.
                        $stateArray = explode(",", file_get_contents("text/servicearea.txt"));
                        
                        //simple numeric variable
                        $count = 0;
                        
                        //Checks if each word in $stateArray matches $State and increments count if true.
                        for($s = 0; $s < sizeof($stateArray); $s++){
                            if($State == $stateArray[$s]){
                                $count++;
                            }
                        }
                        
                        //Welcome message
                        print("<p class='info'>Welcome $Name!</p><p class='spacer'></p>");
                        
                        //Service area check. If count is greater than 1, the selected service area can be serviced. Otherwise, it cannot be serviced.
                        if($count > 0){
                            print("<p class='info'>We service $State! You can pick up your order at the location in your area.</p><p class='spacer'></p>");
                        }else{
                            print("<p class='info'>We can't find a location in the area you selected. ($State) Please make sure to use the two letter abbreviation of your state.</p><p class='spacer'></p>");
                        }
                        
                        //Switch case to toggle through each product. Changes image and description.
                        switch ($Products):
                            case 0:
                                print("<p class='info'>You ordered the Cookies and Brownies Package from Craft Cookies Cottage.</p><p class='spacer'></p>");
                                print("<p class='info'>$prodArray[0]</p><p class='spacer'></p>");
                                print("<div class='imgbox'><img class='img' src='img/cookie3.jpg' ></div><p class='spacer'></p>");
                                break;
                            case 1:
                                print("<p class='info'>You ordered the Breads and Pastries Package from Craft Cookies Cottage.</p><p class='spacer'></p>");
                                print("<p class='info'>$prodArray[1]</p><p class='spacer'></p>");
                                print("<div class='imgbox'><img class='img' src='img/product2.jpg' ></div><p class='spacer'></p>");
                                break;
                            case 2:
                                print("<p class='info'>You ordered the Cakes and Pies Package from Craft Cookies Cottage.</p><p class='spacer'></p>");
                                print("<p class='info'>$prodArray[2]</p><p class='spacer'></p>");
                                print("<div class='imgbox'><img class='img' src='img/Cakes_and_Pies.jpg' ></div><p class='spacer'></p>");
                                break;
                            case 3:
                                print("<p class='info'>You ordered the Birthday Cake Package from Craft Cookies Cottage.</p><p class='spacer'></p>");
                                print("<p class='info'>$prodArray[3]</p><p class='spacer'></p>");
                                print("<div class='imgbox'><img class='img' src='img/product3.jpg' ></div><p class='spacer'></p>");
                                break;
                            case 4:
                                print("<p class='info'>You ordered the Party Box Package from Craft Cookies Cottage.</p><p class='spacer'></p>");
                                print("<p class='info'>$prodArray[4]</p><p class='spacer'></p>");
                                print("<div class='imgbox'><img class='img' src='img/product4.jpg' ></div><p class='spacer'></p>");
                                break;
                            default :
                                print("Something went wrong. <|:(");
                        endswitch;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
