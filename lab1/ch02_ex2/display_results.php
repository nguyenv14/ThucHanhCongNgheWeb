<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<?php

    if(isset($_POST['investment']) && isset($_POST['interestRate']) && isset($_POST['years'])){
        $investment = filter_input(INPUT_POST, 'investment',FILTER_VALIDATE_FLOAT);
        $interestRate = filter_input(INPUT_POST, 'interestRate',FILTER_VALIDATE_FLOAT);
        $years = filter_input(INPUT_POST, 'years',FILTER_VALIDATE_INT);
        
        if ($investment === FALSE ) {
            $errorMessage = 'Investment must be a valid number.'; 
        } else if ( $investment <= 0 ) {
            $errorMessage = 'Investment must be greater than zero.'; 
        // validate interest rateư
        } else if ( $interestRate === FALSE )  {
            $errorMessage = 'Interest rate must be a valid number.'; 
        } else if ( $interestRate <= 0 ) {
            $errorMessage = 'Interest rate must be greater than zero.'; 
        // validate years
        } else if ( $years === FALSE ) {
            $errorMessage = 'Years must be a valid whole number.';
        } else if ( $years <= 0 ) {
            $errorMessage = 'Years must be greater than zero.';
        } else if ( $years > 30 ) {
            $errorMessage = 'Years must be less than 31.';
        // set error message to empty string if no invalid entries
        } else {
            $errorMessage = ''; 
        }
        
        if ($errorMessage != '') 
        {
            include('index.php');
            exit(); 
        }


        $futureInvestment = $investment;
        for($i = 1; $i<= $years; $i++){
            $futureInvestment = $futureInvestment + $futureInvestment * $interestRate * 0.01;
        }


        $investment = "$".number_format($investment, 2);
        $futureInvestment = "$".number_format($futureInvestment, 2);
        $interestRate = number_format($interestRate, 2)."%";
    }
?>
<body>
    <main>
        <h1>Future Value Calculator</h1>

        <label>Investment Amount:</label>
        <span><?php echo $investment ?></span><br>

        <label>Yearly Interest Rate:</label>
        <span><?php echo $interestRate ?></span><br>

        <label>Number of Years:</label>
        <span> <?php echo $years ?></span><br>

        <label>Future Value:</label>
        <span><?php echo $futureInvestment ?></span><br>
    </main>
</body>
</html>