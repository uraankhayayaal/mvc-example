<?php
class Automobile
{
    private $vehicleMake;
    private $vehicleModel;

    private $number;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }

    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    public function getDoc()
    {
        return [
        	'make' => $this->vehicleMake,
        	'model' => $this->vehicleModel,
        	'number' => $this->number
        ];
    }
}

class AutomobileFactory
{
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }
}

// // have the factory create the Automobile object
// $veyron = AutomobileFactory::create('Bugatti', 'Veyron');

// print_r($veyron->getMakeAndModel()); // outputs "Bugatti Veyron"