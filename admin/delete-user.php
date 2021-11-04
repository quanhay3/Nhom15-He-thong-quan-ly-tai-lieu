<?php 

    //Include constants.php file here
    include('../config/connect.php');

    // 1. get the ID of Admin to be deleted
    $id_us = $_GET['id_us'];

    //2. Create SQL Query to Delete Admin
    $sql = "DELETE FROM information_user WHERE id_us=$id_us";
    $res = mysqli_query($conn, $sql);
    if($res==TRUE){
        $value='xoa';
        header("Location:manage-user.php?response=$value");
    }else{
        echo 'xoa  tb';
    }
    mysqli_close($conn);

?>