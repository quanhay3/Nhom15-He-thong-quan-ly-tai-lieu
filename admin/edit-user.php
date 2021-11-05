
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <title>Document</title>
</head>
<style>
body {
    background: #BA68C8
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: #BA68C8;
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}
</style>
<body>
<?php
        // Kết nối Database
        $conn = mysqli_connect('localhost', 'root', '', 'files_management');
        if (!$conn) {
            die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
        }
        $id = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * from `information_user` where id='$id'");
        $row = mysqli_fetch_assoc($query);
    ?>
<div class="container rounded bg-white mt-5">

    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://i.imgur.com/0eg0aG0.jpg" width="90"><span class="font-weight-bold">John Doe</span><span class="text-black-50">john_doe12@bbb.com</span><span>United States</span></div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <h6>Back to home</h6>
                    </div>
                    <h6 class="text-right">Edit Profile</h6>
                </div>
                <form  method="post" action="process-edit.php">
                <div class="row mt-2">
                    <div class="col-md-6"><input type="text" class="form-control" id="first_name" name="first_name" placeholder="first name" value="<?php echo $row['first_name']; ?>"></div>
                    <div class="col-md-6"><input type="text" class="form-control" id="last_name" name = "last_name" value="<?php echo $row['last_name']; ?>" placeholder="last_name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" id="email" name ="email" placeholder="Email" value="<?php echo $row['email']; ?>"></div>
                    <div class="col-md-6"><input type="text" class="form-control" id="phone" name = "phone" value="<?php echo $row['phone']; ?>" placeholder="Phone number"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" id="location" name = "location" placeholder="location" value="<?php echo $row['location']; ?>"></div>
                </div>
                
                <div class="mt-5 text-right"><button class="btn btn-primary profile-button" name = "btnSave" type="submit" value="save">Save Profile</button></div>
                </form>
            </div>
        </div>
    </div>

</div>
</body>
</html>