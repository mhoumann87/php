<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Throwing Dice</title>
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
        echo '<h2>Throw no. '.$th.'</h2>';

    for ($d=0; $d < $dice; $d++) {

        $outcome = rand(1,6);

        $di = $d + 1;
        echo '<h5>Dice no. '.$di.' '.$outcome.'</h5>';
    }
}





// Initialize distribution
/*for ( $i=$dice ; $i <= $dice*$throws; $i=$i+1 ) {
    $dist[$i] = 0;
    }

for ( $t=0 ; $t < $throws; $t=$t+1 ) { // Construct distribution
    $outcome = 0;
    for ( $d=0 ; $d < $dice ; $d=$d+1 ) { // Throw dice
        $outcome = $outcome + rand(1,6);
    }
$dist[$outcome] = $dist[$outcome]; // Increase distribution
}
// Output distribution
for ( $i=$dice ; $i <= $dice*$throws ; $i=$i+1 ) {
echo "$i : $dist[$i]<br />";
}
*/

    }


    ?>
    
</body>
</html>