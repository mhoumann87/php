<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Throwing Dice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Dice Throwing Result</h2>

    <?php

    if($_POST['dice'] == '' || $_POST['throws'] == '' ) {

        echo 'You need to enter two values';

    } else {


        $dice = $_POST['dice'];
        $throws = $_POST['throws']; 

for ($t = 0; $t<$throws;$t++) {

    $th = $t+1;
        echo '
        <div class="out">
        <h2>Throw no. '.$th.'</h2>
         <div class="in">
        ';
       

    for ($d=0; $d < $dice; $d++) {

        $outcome = rand(1,6);

        $di = $d + 1;

        echo '
        
            <div class="img">
                <img src="img/'.$outcome.'.png">
            </div>
        
        ';
        
    }
    echo '
    </div>
    </div>
    ';
}
    }


    ?>

<a href="dice.html">Try Again</a>    
</body>
</html>