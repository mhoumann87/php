<?php

include('bike.php');

class CityBike implements Bike {


    public function changeCadance($newCadance) {

       echo "Cadance changed to $newCadance<br>";
    }

    public function changeGear($newGear) {

        echo "Gear set to $newGear<br>";
    }

    public function speedUp($incrementSpeed) {

        echo "Speed increased to $incrementSpeed<br>";
        
    } 

    public function applyBrakes($decrementSpeed) {

        echo"Speed decreased to $decrementSpeed<br>";
        
    } 

}