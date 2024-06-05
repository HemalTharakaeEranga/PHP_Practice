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

    function get_carname() {
        return $this->car;
    }

    function get_color() {
        return $this->color;
    }
}
$TOYOTA = new car_collection("TOYOTA","White");
echo $TOYOTA->get_carname();
echo "<br>";
echo $TOYOTA->get_color();
?>

</body>
</html>