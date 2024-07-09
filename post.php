<?php
if (isset($_POST["name"]) || isset($_POST["age"])) {
    if (preg_match("/[^A-Za-z'-]/", $_POST['name'])) {
        die("Invalid name.Name should be alphabet");
    }

    echo "Hello" . $_POST['name'] . "<br/>";
    echo "my age is" . $_POST['age'] . "<br/>";

    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Name: <input type="text" name="name" />
        Age: <input type="number" name="age" />
        <input type="submit" value="Submit" />
    </form>
</body>

</html>