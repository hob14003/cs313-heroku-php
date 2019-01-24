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
        echo "<input type=\"radio\" name=\"deck\" value=\"$deck skate deck\"> $deck <br>";
    }
    
 
    
    ?>
              
         </form>
        </div>

    </body>
</html>