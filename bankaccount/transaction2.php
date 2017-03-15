<?php 
   include('class.currentAccount.php');
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

<?php
        echo '<h3>Current Account</h3>';

        echo '<h4>Withdraw</h4>';
        $currentAccount2 = new CurrentAccount(456, 'Ole', 1000, 2500);
        print_r($currentAccount2);
        echo '<br><br>';
        echo $currentAccount2->takeout(1300);
        echo '<br><br>';
        print_r($currentAccount2);
        echo '<br><br>';


    ?>
</body>
</html>