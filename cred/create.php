<?php
include "config.php";

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO users (firstname, lastname, email, password, gender) VALUES ('$firstname', '$lastname', '$email', '$password', '$gender')";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Signup form</h2>

<form action="" method="POST">
    <fieldset>
        <legend>Personal Information</legend>
        <label for="firstname">First name:</label>
        <input type="text" id="firstname" name="firstname"><br><br>
        <label for="lastname">Last name:</label>
        <input type="text" id="lastname" name="lastname"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>
