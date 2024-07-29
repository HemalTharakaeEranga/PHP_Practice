<?php

include "config.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', email = '$email', password = '$password', gender = '$gender' WHERE id = '$id'";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = '$id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $password = $row['password'];
            $gender = $row['gender'];
        }
?>

        <h2>user update From</h2>

        <form action="" method="POST">
            <fieldset>
                <legend>Personal Information</legend>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="firstname">First name:</label>
                <input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>"><br><br>
                <label for="lastname">Last name:</label>
                <input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>"><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo $password; ?>"><br><br>
                <label for="gender">Gender:</label>
                <input type="radio" id="male" name="gender" value="male" <?php if ($gender == 'male') echo 'checked'; ?>>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female" <?php if ($gender == 'female') echo 'checked'; ?>>
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other" <?php if ($gender == 'other') echo 'checked'; ?>>
                <label for="other">Other</label><br><br>
                <input type="submit" name="update" value="Submit">
            </fieldset>
        </form>
        </body>

        </html>

<?php
    } else {
        header('Locaton: /view.php');
    }
}
?>