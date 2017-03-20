<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>

<?php
$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";
print_r($paper);
?>

<br><br><hr><br><br>

<?php
$paper[0] = "Copier";
$paper[1] = "Inkjet";
$paper[2] = "Laser";
$paper[3] = "Photo";
print_r($paper);
?>

<br><br><hr><br><br>

<?php
$paper['copier'] = "Copier & Multipurpose";
$paper['inkjet'] = "Inkjet Printer";
$paper['laser'] = "Laser Printer";
$paper['photo'] = "Photographic Paper";
echo $paper['laser']; // prints “Laser Printer”
?>

<br><br><hr><br><br>

<?php
//indexed 0 to 3
$p1 = array("Copier", "Inkjet", "Laser", "Photo");
echo "p1 element: " . $p1[2] . "<br>";
//Asociative
$p2 = array('copier' => "Copier & Multipurpose",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photographic Paper");
echo "p2 element: " . $p2['inkjet'] . "<br>";
?>

<br><br><hr><br><br>

<?php
$paper[0] = "Copier";
$paper[1] = "Inkjet";
$paper[2] = "Laser";
$paper[3] = "Photo";
for ($j = 0 ; $j < 4 ; ++$j) {
echo "$j: $paper[$j] <br>";
}
?>

<br><br><hr><br><br>

<?php
$paper = array('copier' => "Copier & Multipurpose",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photographic Paper");
foreach($paper as $item => $description) {
echo "$item: $description<br>";
}
?>

<br><br><hr><br><br>

<?php
$products = array(

    'paper' => array(
        'copier' => "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic Paper"
),
    'pens' => array(
        'ball' => "Ball Point",
        'hilite' => "Highlighters",
        'marker' => "Markers"
),
    'misc' => array(
        'tape' => "Sticky Tape",
        'glue' => "Adhesives",
        'clips' => "Paperclips"
)

);
echo "<pre>";
foreach($products as $section => $items)
foreach($items as $key => $value) {
echo "$section:\t$key\t($value)<br>";
}
echo "</pre>";
?>
    
</body>
</html>