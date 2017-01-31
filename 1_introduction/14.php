<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Sourcecode</title>
</head>
<body>

<?php

echo '<form method="POST">
      <label>Enter a URL to see the source code</label><br>
      <input type="text" name="url"><br><br>
      <input type="submit" value="Get code"><br><br>
      </form>';

if (empty($_POST['url'])) {
    
    $url = '';

} else {
    
    $url = $_POST['url'];

    echo 'The source code for '.$url.' is<br>';

    $all_lines = file($url);
    foreach ($all_lines as $line_num => $line) {
 	    echo "Line No.-{$line_num}: " . htmlspecialchars($line) . '<br>';
     }
}
?>
    
</body>
</html>