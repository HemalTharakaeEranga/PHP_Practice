<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Car Registration</title>
</head>

<h1>Car Registration</h1>
<body bgcolor="#FCF3CF">
    <div><h2>Registration Form</h2></div>
    <form action="connect.php" method="POST">
        <label for="user">Name:</label>
        <input type="text" id="name" name="name" required/><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required/><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required/><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required/><br><br>

        <input type="submit" id="submit" name="submit"  value="Submit"/>
    </form>

</body>
</html>