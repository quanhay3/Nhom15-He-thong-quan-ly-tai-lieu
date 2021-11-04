<?php
include('../config/connect.php');

$username = $_POST['username'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$str=rand();
$code = md5($str);
$sql_1 = "SELECT * from user where email = '$email'";
$result_1 = mysqli_query($conn, $sql_1);

if (mysqli_num_rows($result_1)>0){
    $value ='existed';
    header("Location: register.php?response=$value");
} else {
    $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
    $sql_2 = "insert into user(username,email, password) 
    values ('$username','$email','$pass_hash')";
    $result_2 = mysqli_query($conn, $sql_2);

    if ($result_2 > 0) {
        $value = 'successfully';
        header("Location: register.php?response=$value");
    }
}