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
    public function message(){
        echo "I am in prado";
    }
}

    $prado = new Prado("Toyota","black");
    $prado->message();
    echo "\n"; 
    $prado->intro();


?>

</body>
</html>