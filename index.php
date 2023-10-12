<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
        <img src="logo-en.jpg" alt="Tim Hortons">
    </header>
    <form action="order.php" method="get">
        <input type="text" name="name" placeholder="Your Name">
        <br>
        <input type="radio" name="size" value="small"> Small
        <input type="radio" name="size" value="medium"> Medium
        <input type="radio" name="size" value="large"> Large
        <input type="radio" name="size" value="extra-large"> Extra Large
        <br>
        <input type="number" name="creams" min="0" placeholder="Number of Creams">
        <input type="number" name="sugars" min="0" placeholder="Number of Sugars">
        <br>
        <input type="submit" value="Order Coffee">
    </form>
    <footer>
        &copy; <?php echo date("Y"); ?> Tim Hortons. All rights reserved.
    </footer>
</body>
</html>
