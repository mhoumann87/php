<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print numbers</title>
</head>
<body>

<?php

$d = 'A';
  for ($n=0; $n<5; $n++)
{
echo ++$d .'<br>';
}

echo '<br><hr><br>';

$e = 'A00';
  for ($n=0; $n<5; $n++)
{
echo ++$e .'<br>';
}

?>    
</body>
</html>