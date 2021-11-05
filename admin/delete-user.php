<?php 

    //Include constants.php file here
    include('../config/connect.php');

    // 1. get the ID of Admin to be deleted
    $id = $_GET['id'];

    //2. Create SQL Query to Delete Admin
    $sql = "DELETE FROM information_user WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if($res==TRUE){
        $value='xoa';
        header("Location:manage-user.php?response=$value");
    }else{
        echo 'Error.';
    }
    mysqli_close($conn);

?>