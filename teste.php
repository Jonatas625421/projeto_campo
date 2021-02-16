<?php

class Car {
    private $model;
    private $brand;

    private function setModel($model) {
        $this->model = $model;
    }

    public function turnOn($model) {
        $this->setModel($model);
        
        echo $this->model . ' is turned on!';
    }
}

$car = new Car();
$car->turnOn('Fit');
