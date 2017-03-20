<?php 
    include('class.Account.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Bank transactions</h2>

    <h3>Account</h3>

    <?php
        echo '<h4>Withdraw</h4>';
        $account1 = new Account(123, 'Ib', 1000);
        print_r($account1);
        echo '<br><br>';
        echo $account1->withdraw(200);
        echo '<br><br>';
        print_r($account1);
        echo '<br><br>';
        echo '<h4>Deposit</h4>';        
        echo $account1->deposit(400);
        echo '<br><br>';
        print_r($account1);
        echo '<br><br>';

        

    ?>
</body>
</html>