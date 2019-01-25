<?php session_start(); ?>

<?php

$removedItems = array();


// show which ones need to be removed
foreach($_POST['rejecteditems'] as $yui)
{
    array_push($removedItems,$yui);
}



// check if there is a cart already
// if there is
if (array_key_exists('cartItems',$_SESSION) && !empty($_SESSION['cartItems']))
{
    $trueCart = $_SESSION['cartItems'];

   $_SESSION["cartItems"] = array_diff($trueCart,$removedItems);



   
    print_r($_SESSION);
}
else
{
    
}

}





?>
