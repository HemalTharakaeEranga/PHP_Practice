<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

        <?php

        // define variables and set to empty values
        $fullname = $email = $gender = $comment = $number =$age = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullname = test_input($_POST["fullname"]);
            $email = test_input($_POST["email"]);
            $gender = test_input($_POST["gender"]);
            $comment = test_input($_POST["comment"]);
            $number = test_input($_POST["number"]);
            $age = test_input($_POST["age"]);
        }
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        ?>

        <h2>PHP Form Validation Example</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
        >
            Name: <input type="text" name="fullname" value="<?php echo $fullname; ?>">
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
            <br><br>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
            <br><br>
            Age: <input type="number" name="age" value="<?php echo $age; ?>">
            <br><br>
            Number(optional): <input type="number" name="number" value="<?php echo $number; ?>">
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        echo "<h2>Your Input:</h2>";
        echo $fullname;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $gender;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $number;
        echo "<br>";
        echo $age;
        ?>
    </body>
</html>