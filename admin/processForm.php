<?php
$msg= "";
$css_class="";

$conn = mysqli_connect('localhost','root','','files_management');


if(isset($_POST['btnSave'])){
    echo"<pre>", print_r($_FILES['profileImage']['name']), "</pre>";
    
    $first_name     = $_POST['first_name'];
    $last_name    = $_POST['last_name'];
    $phone    = $_POST['phone'];
    $email     = $_POST['email'];
    $location  = $_POST['location'];
    $profileImageName = time(). '_' .$_FILES['profileImage']['name'];

    $target = 'images/' . $profileImageName;

if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)){
    $sql = "INSERT INTO information_user(first_name,last_name,phone,email,location,profile_image)
    VALUES('$first_name','$last_name','$phone','$email','$location','$profileImageName')";
    if(mysqli_query($conn,$sql)){
        $msg = "Cập nhật thông tin thành công";
        $css_class = "alert-success";
    }else{
        $msg = "Oops! Cập nhật thông tin thất bại";
        $css_class = "alert-danger";
    }
} else {
    $msg = "failed to upload to upload";
    $css_class = "alert-danger";
}
}

?>