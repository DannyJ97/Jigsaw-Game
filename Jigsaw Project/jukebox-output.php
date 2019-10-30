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
                        Press Play, then choose.
                    </p>
                    <audio controls>
                    <source src="Jigsaw Audio Message.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                    </audio>
                    <form method="GET" action="jukebox-result.php">
                        <input type="radio" name= "option" value="me">Save Me
                        <input type="radio" name= "option" value="my-family">Save My Family
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>