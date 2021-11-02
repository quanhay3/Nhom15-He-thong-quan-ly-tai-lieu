<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
 
    // echo '<pre>';
    // echo print_r($_POST);
    // echo '</pre>';
    // Nhận giá trị từ FORM register gửi sang:
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $pass1      = $_POST['pass1'];
    $pass2      = $_POST['pass2'];
    // Kiểm tra pass1 === pass2 (Javascript kiểm tra luôn)
    // QUY TRÌNH 4 (3) bước
    // Bước 01:
    include('../config/connect.php');

    // Bước 02: Thực hiện các truy vấn
    // 2.1 - Kiểm tra Email này đã tồn tại chưa?
    $sql_1 = "SELECT * FROM user WHERE username='$username' and email='$email'";
    $result_1 = mysqli_query($conn,$sql_1);

    if(mysqli_num_rows($result_1) > 0){
        $value='existed';
        header("Location:register.php?response=$value");
    }else{
        // 2.2 - Nếu ko tồn tại thì mới LƯU
        // Băm mật khẩu
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $str=rand();
        $code=md5($str);
        $sql_2 = "INSERT INTO user(username, email, password) VALUES ('$username','$email','$pass_hash')";
        $result_2 = mysqli_query($conn,$sql_2); //Vì lệnh thực hiện là INSERT: kết quả trả về của $result_2 là SỐ BẢN GHI CHÈN THÀNH CÔNG (SỐ NGUYÊN)
        // Instantiation and passing `true` enables exceptions
    }