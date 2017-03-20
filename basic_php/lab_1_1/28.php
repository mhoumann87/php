<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tempt file_put_contents</title>
</head>
<body>

<?php
$temp_file = tempnam(sys_get_temp_dir(), 'Tux');
echo $temp_file.'<br>';
?>

</body>
</html>