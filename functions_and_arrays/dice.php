<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Throwing Dice</title>
</head>
<body>

    <h2>Dice Throwing Result</h2>

    <?php

    if(empty($_POST['dice'] || $_POST['throws'])) {

        echo 'You need to enter two values';

    } else {


        $dice = $_POST['dice'];
        $throws = $_POST['throws']; 

 // Initialize distribution
for ( $i=$dice ; $i <= 6*$dice ; $i=$i+1 ) {
$dist[$i] = 0;
}
for ( $t=0 ; $t < $throws ; $t=$t+1 ) { // Construct distribution
$outcome = 0;
for ( $d=0 ; $d < $dice ; $d=$d+1 ) { // Throw dice
$outcome = $outcome + rand(1,6);
}
$dist[$outcome] = $dist[$outcome] + 1; // Increase distribution
}
// Output distribution
for ( $i=$dice ; $i <= 6*$dice ; $i=$i+1 ) {
echo "$i : $dist[$i]<br />";
}
    }


    ?>
    
</body>
</html>