<?php 
    if (!isset($investment)) 
    { 
        $investment = ''; 
    } 
    if (!isset($interestRate)) 
    { 
        $interestRate = ''; 
    } 
    if (!isset($years)) 
    { 
        $years = ''; 
    } 
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($errorMessage)) { ?>
        <p class="error"><?php echo $errorMessage; ?></p>
    <?php } ?>
        <form action="display_results.php" method="post">

        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment"
                   value="<?php echo $investment ?>">
            <br>

            <label>Yearly Interest Rate:</label>
            <input type="text" name="interestRate"
                   value="<?php echo $interestRate ?>">
            <br>

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo $years ?>">
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>

    </form>
    </main>
</body>
</html>