<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'car') or die("Connection Failed:" . mysqli_connect());
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        $sql = "INSERT INTO registration (name, email, phone, password) VALUES('$name', '$email', '$phone', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Data Inserted";
        } else {
            echo "Data Not Inserted";
        }
    }
}
?>
