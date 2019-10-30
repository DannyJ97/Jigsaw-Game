<!DOCTYPE html>
<html>
    <head>
        <title>JIGSAW</title>
        <link rel="stylesheet" href="dice.css">
    </head>
    <body>
        <div class="bg-overlay-tint">
            <div class="tv-container">
            <?php
                include "dice-functions.php";
                $guess = $_GET["guess"];
                if(sumIs($guess)){
                    #if guess is correct or in range move to next obstacle
                    header('Location: dice-to-coin.html'); //directs to page wherre coin is found and then redirects to Daniels

                }else{
                    header('Location: dice-submit.html');//reload the dice to let them try again.
          
                }
            ?>
            </div>
        </div>
    </body>
</html>