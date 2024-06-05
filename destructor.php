<!DOCTYPE html>
<html>
<body>

<?php
class car_collection {

    public $car;
    public $color;
    function __construct($car,$color) {
        $this->car = $car;
        $this->color = $color; 
    }

    function __destruct() {
        echo "The car name is" . $this->car . " and color is" . $this->color . "<br>";
    }
}
$TOYOTA = new car_collection("TOYOTA","White");
?>

</body>
</html>