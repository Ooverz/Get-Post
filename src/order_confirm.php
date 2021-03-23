
<?php if((isset($_POST["products"])) && $_SESSION["email"] && $_SESSION["street"] && $_SESSION["city"] && $_SESSION["streetnumber"] && $_SESSION["zipcode"] !== "") : 

require 'products.php';
?>

    <div class="alert alert-success" role="alert"> 

    <h2> Your informations : </h2>
    <ul>
        <li> Email : <?= $_SESSION["email"] ?> </li>
        <li> Street : <?= $_SESSION["street"] ?> </li>
        <li> Streetnumber : <?= $_SESSION["streetnumber"] ?> </li>
        <li> Zipcode : <?= $_SESSION["zipcode"] ?> </li>
        <li> City : <?= $_SESSION["city"] ?> </li>
        <li>  <?php if(isset($_POST["express_delivery"])){
                $totalValue += 5;
                echo "Delivery in 30 minutes";
            }else {
                echo "Delivery in 1 hour";
            } ?> </li>
    </ul>
    </div>


<?php endif ?>




