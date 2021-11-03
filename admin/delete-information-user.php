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
        header("Location:http://localhost:81/nhom15-He-thong-quan-ly-tai-lieu/admin/admin-index.php?response=$value");
    }else{
        echo 'xoa  tb';
    }
    mysqli_close($conn);

?>