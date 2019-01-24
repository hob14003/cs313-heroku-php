<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <?php include "shop.php"?>
    </head>
    <body>

        <h1>Browse</h1>

        <div class="container">
         <form>
             <input type="radio" name="deck" value="Red skate deck"> <?php echo $skateboardDeck[0]; ?>
                <?php showItems(); ?>

         </form>
        </div>

    </body>
</html>