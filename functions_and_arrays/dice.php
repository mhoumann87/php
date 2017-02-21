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


for ( $i=0 ; $i < $dice*$throws ; $i=$i+1 ) {
$dist[$i] = 0;
}
for ( $t=0 ; $t < $throws ; $t=$t+1 ) {
    $outcome = 0;

    for ( $d=0 ; $d < $dice ; $d=$d+1 ) {
$dist[$outcome] = rand(1,6);
}
$dist[$outcome] = $dist[$outcome] + 1; 
}

var_dump ($dist);
//for ( $i=0; $i <= $dice*$throws ; $i=$i+1 ) {
//echo "$i : $dist[$outcome]<br />";
//}
    }


    ?>
    
</body>
</html>