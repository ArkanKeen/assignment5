<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/css.css">
    </head>
    <body>
        <?php
         /*
         echo $name; 
        $n = $_POST["n"];
        if(empty($n))
                echo "Parameter is <u>missing</u>, User Entered: {$n} <br>";
        else if($n%2 == 0)
            echo "Parameter is even, value entered: {$n}";
        else if($n%2 != 0)
            echo "Parameter is odd, value entered: {$n}";
         */
      
        
        //$size = sizeof($_POST["food"]);
        //$food[$size];
        
        $coffeeCount = $_POST["coffeeCount"];
        $coffeeSize[4] = $_POST["coffeeSize"];
        $coffeeType = $_POST["creamAsug"];
        $sugar;
        $cream;
        
        echo "<h1>Thanks for your order. Here it is:</h1>";
        
        switch ($_POST["creamAsug"]) {

            case 1:
               $sugar = 1;
               $cream = 1;


                break;
            case 2:
                
                 $sugar = 2;
                 $cream = 2;



                break;
            case 3:
                 $sugar = 3;
                 $cream = 3;


                break;
            case 4:
                 $sugar = 0;
                 $cream = 0;



                break;
            case 5:
                $sugar = 1;
                $cream = 0;



                break;
            case 6:
                $sugar = 2;
                $cream = 0;



                break;
            case 7:
                 $sugar = 3;
                 $cream = 0;



                break;
            default:
                echo "{$_POST["coffeeSize"][$int]}";
}



function smallImg(){ // for small coffee
            global $sugar;
            global $cream;
            global $coffeeSize;
            if($coffeeSize[0] == "Small"){
                  
                echo '<img src="images/cup.jpg" alt="cup">';
                    
            }
            if($cream >= 1){
                    for($i = 0;$i < $cream;$i++){
                echo '<img src="images/plus.jpg" alt="plus sign">';
                echo '<img src="images/cream.jpg" alt="cream">';
                    }
            }
            if($sugar >= 1){
                    for($i = 0;$i < $sugar;$i++){
                echo '<img src="images/plus.jpg" alt="plus sign">';
                echo '<img src="images/sugar.jpg" alt="sugar">';
                    }
            }
        }
        
         function mediumImg(){ // for small coffee
            global $sugar;
            global $cream;
            global $coffeeSize;
           
                  
            echo '<img src="images/cup.jpg" height="370" height="270" alt="cup">';
                    
            
            if($cream >= 1){
                    for($i = 0;$i < $cream;$i++){
                echo '<img src="images/plus.jpg" alt="plus sign">';
                echo '<img src="images/cream.jpg" alt="cream">';
                    }
            }
            if($sugar >= 1){
                    for($i = 0;$i < $sugar;$i++){
                echo '<img src="images/plus.jpg" alt="plus sign">';
                echo '<img src="images/sugar.jpg" alt="sugar">';
                    }
            }
        }
        
         function largeImg(){ // for small coffee
            global $sugar;
            global $cream;
            global $coffeeSize;
           
                  echo '<img src="images/cup.jpg" height="390" height="285" alt="cup">';
                    
           
            if($cream >= 1){
                    for($i = 0;$i < $cream;$i++){
                echo '<img src="images/plus.jpg" alt="plus sign">';
                echo '<img src="images/cream.jpg" alt="cream">';
                    }
            }
            if($sugar >= 1){
                    for($i = 0;$i < $sugar;$i++){
                echo '<img src="images/plus.jpg" alt="plus sign">';
                echo '<img src="images/sugar.jpg" alt="sugar">';
                    }
            }
        }
        
         function extraLargeImg(){ // for small coffee
            global $sugar;
            global $cream;
            global $coffeeSize;
            
                  
              echo '<img src="images/cup.jpg" height="410" height="300" alt="cup">';
                    
         
            if($cream >= 1){
                    for($i = 0;$i < $cream;$i++){
                echo '<img src="images/plus.jpg" alt="plus sign">';
                echo '<img src="images/cream.jpg" alt="cream">';
                    }
            }
            if($sugar >= 1){
                    for($i = 0;$i < $sugar;$i++){
                echo '<img src="images/plus.jpg" alt="plus sign">';
                echo '<img src="images/sugar.jpg" alt="sugar">';
                    }
            }
        }
        
        
        
          if($_POST["coffeeCount"] >= 1){
             // echo "{$coffeeSize}";
           
           for($i = 0;$i < $coffeeCount;$i++){
               
               
               
               
               
               if(isset($_POST["coffeeSize"][0])){
                   
                    for($int = 0; $int < 4;$int++){

                       $coffeeSize[$int] = $_POST["coffeeSize"][$int];

                        //echo "<p>{$coffeeSize[$int]}<p>";
                         
                        switch ($coffeeSize[$int]) {
                    case "Small":
                   
                        echo "<div>";
                        echo smallImg();
                        echo "</div>";
                        break;
                    case "Medium":
                        echo "<div>";
                        echo mediumImg();
                        echo "</div>";
                        break;
                    case "Large":
                        echo "<div>";
                        echo largeImg();
                        echo "</div>";
                        break;
                    case "ExtraLarge":
                        echo "<div>";
                        echo extraLargeImg();
                        echo "</div>";
                        break;
                      default:
                          echo "{$_POST["coffeeSize"][$int]}";
                }

                    }
        
        
        //'<img src="images/cup.jpg" alt="icon" /> '
        
                  
            }
            else{ echo "no input";}
               
              
             

             
           
           }
            
            
        
        
        
        
        
                  
            }
            else{ echo "It aint working";}
            
            
            $priceSmall = 1.50;
            $priceMedium = 1.85;
            $priceLarge = 2.25;
            $priceExtra = 2.65;
            
            for($int = 0; $int < 4;$int++){

                       $coffeeSize[$int] = $_POST["coffeeSize"][$int];

                        //echo "<p>{$coffeeSize[$int]}<p>";
                         
                        switch ($coffeeSize[$int]) {
                    case "Small":
                   
                        echo "<p>";
                        echo "Cost: ".$coffeeCount." x "."$".$priceSmall." + tax "."= $".($coffeeCount*$priceSmall+1.13);
                        echo "</p>";
                        break;
                    case "Medium":
                        echo "<p>";
                        echo "Cost: ".$coffeeCount." x "."$".$priceMedium." + tax "."= $".($coffeeCount*$priceMedium+1.13);
                        echo "</p>";
                        break;
                    case "Large":
                        echo "<p>";
                        echo "Cost: ".$coffeeCount." x "."$".$priceLarge." + tax "."= $".($coffeeCount*$priceLarge+1.13);

                        echo "</p>";
                        break;
                    case "ExtraLarge":
                        echo "<p>";
                        echo "Cost: ".$coffeeCount." x "."$".$priceExtra." + tax "."= $".($coffeeCount*$priceExtra+1.13);

                        echo "</p>";
                        break;
                      default:
                          echo "{$_POST["coffeeSize"][$int]}";
                }

                    }
            
           
         
          
            
            
        ?>
    </body>
</html>
