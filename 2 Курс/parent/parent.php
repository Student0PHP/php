<?php

class Vechical{
    public function startEngine(){
        echo "Engine started";
    }
    public function stopEngine(){
        echo "Engine stoped";
    }
}

class Car extends Vechical{
    public function startEngine(){
        parent::startEngine();
        echo "<br> Car engine started";
    }
}


$car = new Car();
$car->startEngine();
//Call parent method from child class
$car->stopEngine();