<!--  -->
<html>
<head>
<title>Bill</title>
</head>
<body>
    <h1>Bill</h1>
<?php
    $burgerPrice = 150;
    $pizzaPrice = 250;
    $pastaPrice = 200;
    $dosaPrice = 150;
    $idliPrice = 250;
    $vadaPrice = 200;
    $discountThreshold = 1000;
    $discountPercentage = 0.1;
    $burgerQuantity = $_POST["burger"];
    $pizzaQuantity = $_POST["pizza"];
    $pastaQuantity = $_POST["pasta"];
    $dosaQuantity = $_POST["dosa"];
    $idliQuantity = $_POST["idli"];
    $vadaQuantity = $_POST["vada"];
    $totalAmount = ($burgerPrice * $burgerQuantity) + ($pizzaPrice * $pizzaQuantity) +($pastaPrice * $pastaQuantity)  
                   +($dosaQuantity*$dosaPrice)+($idliPrice*$idliQuantity)+(($vadaPrice*$vadaQuantity));
    echo "Items Ordered:<br>";
    if ($burgerQuantity > 0) {        
        echo "Burger x $burgerQuantity<br>";
    }
    if ($pizzaQuantity > 0) {         
        echo "Pizza x $pizzaQuantity<br>";
    }
    if ($pastaQuantity > 0) {         
        echo "Pasta x $pastaQuantity<br>";
        
    }
    if ($dosaQuantity > 0) {        
        echo "Dosa x $dosaQuantity<br>";
    }
    if ($idliQuantity > 0) {         
        echo "Idli Sambhar x $idliQuantity<br>";
    }
    if ($vadaQuantity > 0) {         
        echo "Sambhar Vada x $vadaQuantity<br>"; 
    } 
    echo "<br>Total Amount: Rs. $totalAmount<br>";
    if ($totalAmount > $discountThreshold) {
        $discountAmount = $totalAmount * $discountPercentage;
        $totalAmount -= $discountAmount;
        echo "Discount (10%): -Rs. $discountAmount<br>";
    }
    echo "Final Amount after Discount: Rs. $totalAmount";
    ?>
</body>
</html>