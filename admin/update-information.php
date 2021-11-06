<?php include'processForm.php'?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Cập nhật thông tin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
  #profileDisplay{
    display:block;
    width:100%;
    margin: 10px auto;
    border-radius:50%;
  }
</style>

<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>User name</h1></div>
    	<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>

<form class="form" action="update-information.php" method="post" id="registrationForm" enctype="multipart/form-data">
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        
          <h3>chọn hình ảnh</h3>

          <?php if(!empty($msg)): ?>
              <div class="alert <?php echo $css_class; ?>" >
                  <?php echo $msg; ?>
              </div>
           <?php endif; ?>
           <img src="../admin/images/placeholer.png" onclick="triggerClick()" id="profileDisplay" />  
          <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" ">
          
      </div></hr><br>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
         
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
          
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                     
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@gmail.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="location"><h4>Location</h4></label>
                              <input type="text" class="form-control" name="location" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" name="btnSave"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg btn-success" type="button" style="text-decoration:none;"><i class="glyphicon glyphicon-ok-sign"></i> <a href="http://localhost:81/nhom15-He-thong-quan-ly-tai-lieu/admin/user-index.php">Back To Home </a> </button>
                            </div>
                      </div>
              	
              
              <hr>
            </div>
        </div><!--/col-9-->
    </div><!--/row-->
</form>    
<table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image User</th>
                        <th>First name</th>						
                        <th>Last name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                            <?php
                                //lấy dữ liệu từ CSDL và để ra bảng (phần lặp lại)
                                //bước 1:kết nối tời csdl(mysql)
                                $conn = mysqli_connect('localhost','root','','files_management');
                                if(!$conn){
                                    die("Không thể kết nối,kiểm tra lại các tham số kết nối");
                                }

                                //bước 2 khai báo câu lệnh thực thi và thực hiện truy vấn
                                $sql = "SELECT * FROM information_user";
                                $result = mysqli_query($conn,$sql);

                                //bước 3 xử lý kết quả trả về
                                if(mysqli_num_rows($result) > 0){
                                    $i=1;
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                            
                            <tr>
                            <th scope="row"><?php echo $i; ?> </th>
                            <td><img src="images/<?php echo $row['profile_image']; ?>" width="80" /></td>
                            <td><?php echo $row['first_name']; ?> </td>
                            <td><?php echo $row['last_name']; ?> </td>
                            <td><?php echo $row['phone']; ?> </td>
                            <td><?php echo $row['email']; ?> </td>
                            <td><?php echo $row['location']; ?> </td>
                            </tr>
                            <?php
                                $i++;
                                }
                            }
                           ?>
                </tbody>                   
            </table>
<script src ="../admin/js/scripts-img.js"></script>                  