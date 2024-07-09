<?php
if (isset($_GET["name"]) || isset($_GET["age"])) {
    echo "Name: " . $_GET["name"] . "<br/>";
    echo " Age: " . $_GET["age"];
    exit();
}
?>

<html>

<body>
    <form action="<?php $_PHP_SELF ?>" method="GET">
        Name: <input type="text" name="name"><br>
        Age: <input type="text" name="age"><br>
        <input type="submit">
    </form>
</body>

</html>