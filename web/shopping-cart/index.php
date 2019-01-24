<html>
    <head>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>

    <?php include "populate.php" ?>

    <div class="container">
        <h1>Browse</h1>
    </div>

        <div class="container">
         <form>
             <?php include "storage.php";      
             
                foreach($skateboardDeck as $deck)
                {
                echo "<input type=\"checkbox\" name=\"$deck\" value=\"$deck skate deck\"> $deck <br>";
                }
             ?>
              
         </form>
        </div>

    </body>
</html>