<?php
  if(isset($_POST['btnSave'])){
    $id_us      = $_POST['id_us'];
    $first_name     = $_POST['first_name'];
    $last_name    = $_POST['last_name'];
    $email    = $_POST['email'];
    $phone     = $_POST['phone'];
    $location  = $_POST['location'];
    

    require("../config/connect.php");

    $sql = "UPDATE information_user SET id_us='$id_us', first_name='$first_name',last_name = '$last_name', email='$email', phone='$phone',location='$location' WHERE id_us='$id_us'";


    echo $sql."<br>";

    if(mysqli_query($conn,$sql)==TRUE){
      $value='ok';
      header("Location:manage-user.php?response=$value");
    }else{
      echo 'sua tb';
    }
    mysqli_close($conn);
  }
?>
