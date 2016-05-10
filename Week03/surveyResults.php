<?php
session_start(); // resume existing session

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="resultsSection">
		
        <?php

		$handle = fopen("results.txt", "r");   // we will read line by line

        $B = 0;
        $C = 0;
        $D = 0;
        $E = 0;

        $F = 0;
        $G = 0;
        $H = 0;
        $I = 0;

        $J = 0;
        $K = 0;
        $L = 0;
        $M = 0;
        
        $N = 0;
        $O = 0;
        $P = 0;
        $Q = 0;
    
    
		if ($handle) {
			while (($line = fgets($handle)) !== false) {
        		$set = explode(":", $line);    // split by the ':'
                
                if($set[1] == "day"){
                    $B++;
                }

                 if($set[1] == "weekly"){
                    $C++;
                }

                 if($set[1] == "twice"){
                    $D++;
                }

                 if($set[1] == "month"){
                    $E++;
                }

                //Which Flavor?
                if($set[2] == "vanilla"){
                    $F++;
                }

                 if($set[2] == "chocolate"){
                    $G++;
                }

                 if($set[2] == "red"){
                    $H++;
                }

                 if($set[2] == "mint"){
                    $I++;
                }

                //Special Events?
                if($set[3] == "birthday"){
                    $J++;
                }

                 if($set[3] == "anniversary"){
                    $K++;
                }

                 if($set[3] == "wedding"){
                    $L++;
                }

                 if($set[3] == "holiday"){
                    $M++;
                } 

            }
                
                
        		echo "<h1>$set[0], your results are in!</h1>";       // name
        		echo "<h2>How often do people eat cupcakes?</h2>";
                echo $B;
                echo " people eat cupcakes daily!";
                echo "<br/>";
                echo $C;
                echo " people eat cupcakes once a day!";
                echo "<br/>";
                echo $D;
                echo " people eat cupcakes twice a month!";
                echo "<br/>";
                echo $E;
                echo " people eat cupcakes once a month!";
                echo "<br/>";

                echo "<h2>Which flavor is prefered?</h2>";
                echo $F;
                echo " like Vanilla";
                echo "<br/>";
                echo $G;
                echo " like Chocolate";
                echo "<br/>";
                echo $H;
                echo " like Red Velvet";
                echo "<br/>";
                echo $I;
                echo " like Mint Chocolate Chip";
                echo "<br/>";

                echo "<h2>What events are coming up?</h2>";
                echo $J;
                echo " have a Birthday!";
                echo "<br/>";
                echo $K;
                echo " have an Anniversary!";
                echo "<br/>";
                echo $L;
                echo " have a Wedding!";
                echo "<br/>";
                echo $M;
                echo " have a Holiday!";
                echo "<br/>";

			
			fclose($handle); // close the file
            
		} 
        else {
		    // error opening the file.
		    echo "Could not open results.txt";
		}

		if (isset($_SESSION['userName'])) {
				echo "<br/>Thanks for taking my survey! <a href=\"destroySessions.php\">Click here</a> to end it.";
		}
		?>
	</div>

</body>
</html>