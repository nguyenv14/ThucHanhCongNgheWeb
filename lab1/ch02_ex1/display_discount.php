<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <?php
    
    $productDesc = filter_input(INPUT_POST, 'productDesc');
    $price = filter_input(INPUT_POST, 'price');
    $discountPercent = filter_input(INPUT_POST, 'discountPercent');



    $discountAmount = $price * $discountPercent * 0.01; 
    $discountPrice = $price - $discountAmount;

    
    $priceFormat = '$'.number_format($price, 2);
    $discountPercentFormat = number_format($discountPercent, 2).'%';
    $discountAmountFormat = '$'.number_format($discountAmount, 2);
    $discountPriceFormat = '$'.number_format($discountPrice, 2);

    ?>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $productDesc; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $priceFormat; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discountPercentFormat; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discountAmountFormat; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discountPriceFormat; ?></span><br>
    </main>
</body>
</html>