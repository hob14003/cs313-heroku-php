<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>

        <h1>Browse</h1>

        <div class="container">
         <form>
             <input type="radio" name="deck" value="Red skate deck"> 
             <?php $test = "testing"; include "shop.php"; echo "<p>$test</p>"; ?>
             <input type="radio" name="deck" value ="Blue skate deck"> Blue Skate Deck <?php echo $skateboardDeck[1]; ?>
             <input type="radio" name="deck" value =" Yellow skate deck"> Yellow skate Deck <?php echo $skateboardDeck[2]; ?>
             

         </form>
        </div>

    </body>
</html>