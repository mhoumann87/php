<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Treasure Hunt Map</title>
    <link rel="stylesheet" href="./th.css" type="text/css">
</head>
<body>
    <div id="map">
        
    <?php
    $no = rand(1,5);
    $coin=0;
    while ($coin < $no) {
        $x = rand(0,600);
        $y = rand(0,350);
        echo '<img src="./images/coin.png" height="50px" style="position: absolute;left:'.$x.'px;top:'.$y.'px">';
        $coin ++;
    }

    ?>
    </div>
</body>
</html>