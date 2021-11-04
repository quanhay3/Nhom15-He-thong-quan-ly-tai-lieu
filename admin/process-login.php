<?php
    session_start();
    require('../config/connect.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_1 = "SELECT * from user where username = '$username'";
    $result_1 = mysqli_query($conn, $sql_1);

    if (mysqli_num_rows($result_1)>0){
       $row=mysqli_fetch_assoc($result_1);
       $pass_saved = $row['password'];

       if(password_verify($password, $pass_saved)){
           $_SESSION['mySession']=$username;
           header("Location:user-index.php");   
       }else{
        $response = 'failed_pass';
        header("Location: login.php?response=$response");
       }
    }else{
        $response = 'failed_user';
        header("Location: login.php?response=$response");
    }

?>