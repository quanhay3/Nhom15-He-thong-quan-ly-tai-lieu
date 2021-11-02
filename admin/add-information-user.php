<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Thêm</title>
  </head>
  <body>
    <div class="container_fliud">
        <div class="row">
        <div class="col-md-8"><img src="img/blood.png" class="img-fluid" alt="" /></div>
        </div>
        <div class="row-nav-menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Trang chủ</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Quản lý người nhận máu</a>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    </div>
                </div>
            </nav> 
            <div class="row">
                </div>
                <div class="d-grid gap-2 col-2 mx-auto">
                </div>
                <div class="main-content">
    <div class="wrapper">
        <h1>Thêm người nhận máu</h1>
        <form action="process-add-information-user.php" method="post">
        <div class="row mb-3">
                    <label for="txtid" class="col-sm-2 col-form-label">Tên tác giả</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="txtid" name="txtid">
                    </div>
                  <div class="row mb-3">
                    <label for="txtname" class="col-sm-2 col-form-label mt-4">Email</label>
                    <div class="col-sm-3 mt-4">
                      <input type="text" class="form-control" id="txtname" name="txtname">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txtphone" class="col-sm-2 col-form-label">SĐT</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="txtphone" name="txtphone">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txtdocumentsupload" class="col-sm-2 col-form-label">Tên tài liệu</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="txtdocumentsupload" name="txtdocumentsupload">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txtuploaddate" class="col-sm-2 col-form-label">Ngày tải lên</label>
                    <div class="col-sm-3">
                      <input type="date" class="form-control" id="txtuploaddate" name="txtuploaddate">
                    </div>
                  </div>
                        <?php
                          $conn = mysqli_connect('localhost','root','','files_management');
                          if(!$conn){
                              die("Không thể kết nối,kiểm tra lại các tham số kết nối");
                          }
                          $sql = "SELECT * FROM information_user" ;
                          $result = mysqli_query($conn,$sql);

                          if(mysqli_num_rows($result) > 0){
                            while($row=mysqli_fetch_assoc($result)){
                              
                            }
                          }
                          //dong ket noi
                          mysqli_close($conn);
                        ?>
                     
                         
                      </select>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary" name="btnSave">Lưu</button>
                </form>


    </div>
</div>
                <footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-danger p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-danger" href="http://localhost:81/dhtl/index.php">TLU</a>
  </div>
  <!-- Copyright -->
</footer>
  
</div>
<!-- End of .container -->            
  </body>
</html>