<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>World Population</h1>

<?php

function fetchurl ( $url ) {
$fp = fopen($url, 'r');
if ( ! $fp )
return "No page";
$content = fread($fp, 1000000);
fclose($fp);
return $content;
}

$page = fetchurl('https://www.populationinstitute.org/newsroom/news/view/44/');
$html = htmlentities($page);
$pop = preg_match('/^["World Population"][0-9]+/', $page);
echo $html;
echo $pop;

?>
</body>
</html>