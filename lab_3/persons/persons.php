<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Persons</title>
</head>
<body>
    <h1>Persons</h1>

<?php

    $person = array ( );
    $person[0] = 'Ole';
    $person[1] = 'Hans';
    $person[ ] = 'Niels';
    $person[7] = 'Villy';
    $person[ ] = 'Henrik';
    $person['name'] = 'Kristian';
    $person[10] = array ('First Name'=> 'Jan' , 'Sure Name' => 'Johansen', 'Tlf' => 28356208);

    foreach ($person as $p) {
        echo '<pre>';
        print_r($p) ;
        echo '</pre><br><br>';
    }

    asort($person);
    foreach ($person as $p) {
        echo '<pre>';
        print_r($p);
        echo '</pre><br><br>';
    }
?>
    
</body>
</html>