<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print error</title>
</head>
<body>

<?php
echo $x;
  print_r(error_get_last())."\n";
?>
    
</body>
</html>