<?php
    include('../config/connect.php');
    session_start();
    if(isset($_POST['btnLogin'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE username='$username' and password='$password' ";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) == 1){
            $_SESSION['mySession'] = $username;
            header("location:http://localhost:81/project/admin/user-index.php");
        }else{
            $response = 'failed_password';
            header("location:login.php?response=$response");

        }
        
    }



?>