<?php
   include('../config/connect.php');

   if(isset($_POST['btnRegister'])){
       $id = "";
       $username = $_POST['username'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $repassword = $_POST['repassword'];
       $level = 1;
       $sql = "INSERT INTO user (id,username,email,password,level) VALUES ('$id','$username','$email','$password','$level')";
       mysqli_query($conn,$sql);
       header('location:login.php');
       
       
    




   }




?>