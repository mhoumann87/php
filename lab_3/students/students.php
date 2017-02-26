<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students</title>
</head>
<body>
    <h1>Students</h1>

<?php

    $students = array(
        256 => array('name' => 'Jon', 'grade' => 98.5),
        2 => array('name' => 'Vance', 'grade' => 85.1),
        9 => array('name' => 'Stephen', 'grade' => 94.0),
        364 => array('name' => 'Steve', 'grade' => 85.1),
        68 => array('name' => 'Rob', 'grade' => 74.6)
    );

    ksort($students);
    foreach ($students as $key => $val) {
        
        echo '<pre>';
        print_r($key = $val);
        echo '</pre><br><br>';
    }
    


?>
    
</body>
</html>