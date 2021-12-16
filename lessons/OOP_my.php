<?php
class Car {
    protected $brand;
    protected $model;
    protected $year;
    protected $mileage;
    private $noAccess; //доступен только внутри класса. не доступен в подклассах

    public function __construct ($b, $m, $y, $mileage = 0) {
        $this->brand = $b;
        $this->model = $m;
        $this->year = $y;
        $this->mileage = $mileage;
        $this->noAccess = true;
    }
    public function drive () {
        echo "$this->brand $this->model ($this->year, $this->mileage) driving<br>";
    }
    public function addMileage ($mileage) {
        $error = false;
        if ($mileage > 0) {
        $this->mileage += $mileage;
        } else {
            $error = true;
        }
        return [
            'error' => $error,
            'mileage' => $this->mileage
        ];
    }
}

class ElectroCar extends Car {
    public $electroCar;
    public function __construct ($b, $m, $y, $mileage = 0) {
        $this->electroCar = true;
        parent::__construct($b, $m, $y, $mileage);
    }
    public function drive () {
        echo "Electrocar $this->brand $this->model ($this->year, $this->mileage) driving<br>";
    }
}

$audi = new Car('Audi', 'Q5', 2021);
$vesta = new Car('Lada', 'Vesta', 2020, 15000);

$audi->drive();
$vesta->drive();

$currentAudiMileage = $audi->addMileage(2000);
echo $currentAudiMileage['mileage'] . '<br>';

$tesla = new ElectroCar('Tesla', 'Model S', 2021);
$tesla->drive();
echo '<hr>';