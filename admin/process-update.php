<?php
  if(isset($_POST['btnSave'])){
    
    $first_name     = $_POST['first_name'];
    $last_name    = $_POST['last_name'];
    $phone    = $_POST['phone'];
    $email     = $_POST['email'];
    $location  = $_POST['location'];
    

    require("../config/connect.php");

    $sql = "INSERT INTO information_user(first_name,last_name,phone,email,location)
    VALUES('$first_name','$last_name','$phone','$email','$location')";

    echo $sql."<br>";

    if(mysqli_query($conn,$sql)==TRUE){
      $value='successfully';
      header("Location:user-index.php?response=$value");
    }else{
      $value='existed';
      header("Location:user-index.php?response=$value");
    }
    mysqli_close($conn);
  }
?>