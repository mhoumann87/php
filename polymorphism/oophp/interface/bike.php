<?php

interface Bike {

    public function changeCadance($newCadance);
    public function changeGear($newGear);
    public function speedUp($incrementSpeed);
    public function applyBrakes($decrementSpeed);
}