<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ger URL</title>
</head>
<body>
<?php
    
    if (empty($_SERVER['HTTPS'])) {
    $protocol = 'HTTP://';
    } else {
    $protocol = 'HTTPS://';
    }    
    
    $host = $_SERVER['HTTP_HOST'];
    $path = $_SERVER['REQUEST_URI'];
    
    $url = [$protocol, $host, $path];

    $url = implode("", $url);
    echo $url.'<br>';

    $url = parse_url($url);
    
    echo 'Scheme: '.$url['scheme'].'<br>';
    echo 'Host  : '.$url['host'].'<br>';
    echo 'Path  : '.$url['path'].'<br>';
?>
</body>
</html>