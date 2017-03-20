<?php
include('class.cityBike.php');

$red = new CityBike();


$red->changeCadance(5);
$red->changeGear(3);
$red->speedUp(10);
$red->applyBrakes(5);