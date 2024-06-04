<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Tutorial</title>
</head>
<body>
    <h1> The car collection</h1>
    <?php
    class car{
    public $car;
    public $color;
    
    function set_carname($car){
      $this ->car = $car;  
    }

    function get_carname(){
        return $this -> car;
    }
    }
    $BMW = new car();
    $Auddi = new car();
    $BMW->set_carname('BMW');
    $Auddi->set_carname('Auddi');

    echo $BMW->get_carname();
    echo "<br>";
    echo $Auddi->get_carname();
    ?>
</body>
</html>