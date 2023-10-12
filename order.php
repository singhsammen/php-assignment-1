<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
        <img src="logo-en.jpg" alt="Tim Hortons">
    </header>
    <?php
    $name = $_GET['name'];
    $size = $_GET['size'];
    $creams = $_GET['creams'];
    $sugars = $_GET['sugars'];

    $price = calculatePrice($size, $creams, $sugars);

    echo "<h2>Thank you, $name, for your order!</h2>";
    echo "<p>You ordered a $size coffee with $creams creams and $sugars sugars.</p>";
    echo "<p>Total Cost: $$price (including 13% tax)</p>";

    for ($i = 0; $i < $creams; $i++) {
        echo '<img src="cream.jpg" alt="Cream">';
    }
    echo '<img src="plus.jpg" alt="Plus Sign">';
    
    for ($i = 0; $i < $sugars; $i++) {
        echo '<img src="sugar.jpg" alt="Sugar">';
    }
    echo '<img src="plus.jpg" alt="Plus Sign">';
    

    echo '<img src="cup.jpg" alt="Coffee Cup" class="' . $size . '-cup">';
    function calculatePrice($size, $creams, $sugars) {
        $basePrice = 3.50; 
        $pricePerCream = 0.50;
        $pricePerSugar = 0.25;
        $taxRate = 0.13;

        $price = $basePrice + ($creams * $pricePerCream) + ($sugars * $pricePerSugar);
        $totalPrice = $price + ($price * $taxRate);

        return number_format($totalPrice, 2); 
    }
    ?>
    <footer>
        &copy; <?php echo date("Y"); ?> Tim Hortons. All rights reserved.
    </footer>
</body>
</html>
