<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'photo');

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$query = "insert into users(name, email, comment) values('$name', '$email', '$comment')";

mysqli_query($con, $query);

header('location:index.php#contact');
?>