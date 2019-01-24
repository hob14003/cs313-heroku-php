<html>
    <head>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>

        <h1>Browse</h1>

        <div class="container">
         <form>
             <?php include "storage.php"; include "populate.php"; showItems(); ?>
              
         </form>
        </div>

    </body>
</html>