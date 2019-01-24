<html>
    <head>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>

        <h1>Browse</h1>

        <div class="container">
         <form>
             <?php include "storage.php";      
             
    foreach($skateboardDeck as $deck)
    {
        echo "<p> hello world </p>";
        echo "<input type=\"radio\" name=\"deck\" value=\"$deck skate deck\"> $skateboardDeck[0] <br>";
    }
    
    
    
    ?>
              
         </form>
        </div>

    </body>
</html>