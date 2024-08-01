<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'form';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    exit('Please fill out all required fields.');
}

if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
    exit('Please fill out all required fields.');
}

if($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')){
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows > 0){
        echo 'Username exists, please choose another!';
    } else {
        if($stmt = $con->prepare('INSERT INTO users (username, password, email) VALUES (?, ?, ?)')){
            $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Assign the hashed password to a variable
            $stmt->bind_param('sss', $_POST['username'], $hashed_password, $_POST['email']);
            $stmt->execute();
            echo 'You have signed up!';
        } else {
            echo 'Could not prepare statement!';
        }
    }
    $stmt->close();
}

else{
    echo 'Could not prepare statement!';
}

$con->close();
?>
