<?php
  if(isset($_POST['btnSave'])){
    $id      = $_POST['txtid'];
    $name     = $_POST['txtname'];
    $phone     = $_POST['txtphone'];
    $documents_upload   = $_POST['txtdocumentsupload'];
    $upload_date   = $_POST['txtuploaddate'];

    $conn = mysqli_connect('localhost','root','','files_management');
                                if(!$conn){
                                    die("Không thể kết nối,kiểm tra lại các tham số kết nối");
                                }

    $sql = "INSERT INTO blood_recipient(id,name,phone,email,documents_upload,upload_date)
    VALUES('$id','$name','$phone','$documents_upload','$upload_date')";

    echo $sql."<br>";

    if(mysqli_query($conn,$sql)==TRUE){
      $value='successfully';
      header("Location:http://localhost:81/nhom15-He-thong-quan-ly-tai-lieu/admin/information-user.php?response=$value");
    }else{
      $value='failed';
      header("Location:http://localhost:81/nhom15-He-thong-quan-ly-tai-lieu/admin/add-information-user.php?response=$value");
    }
    mysqli_close($conn);
  }
?>