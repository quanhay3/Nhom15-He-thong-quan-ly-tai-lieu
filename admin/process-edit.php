<?php
  if(isset($_POST['btnSave'])){
    $id             =$_POST['id'];
    $first_name     = $_POST['first_name'];
    $last_name    = $_POST['last_name'];
    $email    = $_POST['email'];
    $phone     = $_POST['phone'];
    $location  = $_POST['location'];
    

    require("../config/connect.php");

    $sql = "UPDATE 'information_user' SET first_name='$first_name',last_name = '$last_name', email='$email', phone='$phone',location='$location' WHERE id='$id'";


    echo $sql."<br>";

    if(mysqli_query($conn,$sql)==TRUE){
      $value='ok';
      header("Location:manage-user.php?response=$value");
    }else{
      echo 'Error.';
    }
    mysqli_close($conn);
  }
?>