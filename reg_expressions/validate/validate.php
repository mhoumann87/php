<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
</head>
<body>
    <h1>Exchange Service</h1>

<?php

    $rate = 8.43;
    $fee = 20.0;


    if (empty($_POST['kroner'])) {
        echo 'You must ender an ammount in DKR';
    } else {
        if (!is_numeric($_POST['kroner'])) {
            echo 'You must enter a number';
        } else {
            $kr = $_POST['kroner'];
            $dollars = ($kr - $fee) / $rate;
            $dollars = number_format($dollars, 2, ",", ".");
            echo "For DKr. $kr you receive \$$dollars";
        }
    }

    echo '<br><br><hr><br><br><h1>Regex</h1><br>';

    
    $rate = 8.43;
    $fee = 20.00;
    $kr = $_POST['kroner'];
    $ok = preg_match('/[0-9]+.[0-9]{2}/', $kr);

    if ($kr == '') {
        echo 'You must enter an amount in DKR';
    } else {
        if ($ok == 0) {
            echo 'You must enter number with 2 decimals';
        } else {
            if ($kr < $fee) {
                echo 'You must exchange an amount largen than the fee';
            } else {
                $dollars = ($kr - $fee) / $rate;
                $dollars = number_format($dollars, 2, ",", ".");
                echo "For DKr. $kr you receive \$$dollars";
            }
        }
    }

?>
    
</body>
</html>