<?php
if(isset($_REQUEST["name"]) || isset($_POST["age"])){
    echo "Hello ".$_REQUEST["name"]."<br>";
    echo "Your age is ".$_POST["age"]."<br>";
    exit();
}

?>

<html>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        Name: <input type="text" name="name" />
        Age: <input type="number" name="age" />
        <input type="submit" value="Submit" />
    </form>
</body>
</html>