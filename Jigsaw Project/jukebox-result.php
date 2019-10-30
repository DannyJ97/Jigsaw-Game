<!DOCTYPE html>
        <html>
            <head>
                <title>JIGSAW</title>
                <link rel="stylesheet" href="dice.css">
            </head>
            <body id="dice-to-coin-bg">
                <div class="bg-overlay-tint">
                    <div class="tv-container">
                        <div class="txt">
                            <p>
                                <?php
                                include "dice-functions.php";
                                $option = $_GET["option"];
                                whoLives($option);
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </body>
        </html>