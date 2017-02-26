<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chuck Days</title>
</head>
<body>
    <h1>Chuck Days</h1>

<?php
    
    date_default_timezone_set('Europe/Copenhagen');

    $chuck_days = array(
        'Mon' => "Chuck Norris possesses demons.",
        'Tue' => "The Incredible Hulk is Green because he envies Chuck Norris.",
        'Wen' => "Chuck Norris uses sulfuric acid as mouth wash.",
        'Tue' => "A blanket uses Chuck Norris to stay warm.",
        'Fri' => "Chuck Norris abducts aliens.",
        'Sat' => "Chuck Norris can build sandcastles under water",
        'Sun' => "On the seventh day, God rested. But Chuck Norris worked out."
    );

    $day = date('D');
    
    echo 'Today is '.date('l, F, j, Y').' and<br>'.$chuck_days[$day].'<br>';
?>
</body>
</html>