<!DOCTYPE html>
<html>
<body>

<?php
class car_collection {

    public $car;
    public $color;
    public function __construct($car,$color) {
        $this->car = $car;
        $this->color = $color; 
    }
   public function intro(){

       echo "A {$this->car} is a car and the color of the car {$this->color}.";
    }
}

class Prado extends car_collection{

    public $meter;

    public function __construct($car,$color,$meter)
    {
        $this->car = $car;
        $this->color = $color;
        $this->meter = $meter;
    }

    public function intro(){

        echo "A {$this->car} is a car and the color of the car {$this->color} and the meter is {$this->meter}.";
    }
}

    $prado = new Prado("Toyota","black",2024);
    $prado->intro();


?>

</body>
</html>