<?php
  session_start();
  if(!isset($_SESSION['mySession'])){
    header('location:login.php');
  }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link href="css/Style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="row-nav-menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="http://localhost:81/Nhom15-He-thong-quan-ly-tai-lieu/admin/user-index.php">Trang Chủ</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item">
                        <a class="nav-link" href=""></a>
                        </li>
                        <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Thông tin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="http://localhost:81/Nhom15-He-thong-quan-ly-tai-lieu/admin/update-information.php">Thông tin cá nhân</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Thông tin tác giả</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                    <form action="search-Results.php".php" method="get">
                    Search: <input type="text" name="search" />
                    <input type="submit" name="ok" value="search" />
                    </form>
                    </div>
                </div>
            </nav> 
<div class="container" style = "margin-top:30px">
<div class="row">
    <div class="col-12 col-lg-3">
		<div class="card">
			<div class="card-body">
      		<a href="logout.php"> <button type="submit" name="Logout" class="mb-4 btn btn-danger">Đăng xuất</button> </a>
				<div class="d-grid"> <a href="http://localhost:81/nhom15-He-thong-quan-ly-tai-lieu/admin/upload-index.php" class="btn btn-primary ">Add File</a>
				</div>
				<h5 class="my-3">My Drive</h5>
				<div class="fm-menu">
				<div class="list-group list-group-flush"> <a href="http://localhost:81/nhom15-He-thong-quan-ly-tai-lieu/admin/user-index.php" class="list-group-item py-1"><i class="bx bx-folder me-2"></i><span>All Files</span></a>
						<a href="http://localhost:81/Nhom15-He-thong-quan-ly-tai-lieu/admin/download-index.php" class="list-group-item py-1"><i class="fas fa-download"></i><span>          Download</span></a>
						<a href="http://localhost:81/Nhom15-He-thong-quan-ly-tai-lieu/admin/delete-file-index.php" class="list-group-item py-1"><i class="bx bx-trash-alt me-2"></i><span>Deleted Files</span></a>
						<a href="http://localhost:81/Nhom15-He-thong-quan-ly-tai-lieu/admin/edit-export.php" class="list-group-item py-1"><i class="bx bx-file me-2"></i><span>Documents</span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
		<div class="card-body">
		<h5 class="mb-0 text-primary font-weight-bold">201 GB <span class="float-end text-secondary">512 GB</span></h5>
				<p class="mb-0 mt-2"><span class="text-secondary">Used</span><span class="float-end text-primary">Upgrade</span>
				</p>
				<div class="progress mt-3" style="height:7px;">
					<div class="progress-bar" role="progressbar" style="width: 39%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
					
				</div>
				<div class="mt-3"></div>
				<div class="d-flex align-items-center">
					<div class="fm-file-box bg-light-primary text-primary"><i class="bx bx-folder me-2"></i>
					</div>
					<div class="flex-grow-1 ms-2">
						<h6 class="mb-0">All Files</h6>
						<p class="mb-0 text-secondary">1,756 files</p>
					</div>
					<h6 class="text-primary mb-0">15.3 GB</h6>
				</div>
				<div class="d-flex align-items-center mt-3">
					<div class="fm-file-box bg-light-success text-success"><i class="bx bxs-file-doc"></i>
					</div>
					<div class="flex-grow-1 ms-2">
						<h6 class="mb-0">Documents</h6>
						<p class="mb-0 text-secondary">123 files</p>
					</div>
					<h6 class="text-primary mb-0">1.3 GB</h6>
				</div>
				<div class="d-flex align-items-center mt-3">
					<div class="fm-file-box bg-light-danger text-danger"><i class="bx bx-video"></i>
					</div>
					<div class="flex-grow-1 ms-2">
						<h6 class="mb-0">Media Files</h6>
						<p class="mb-0 text-secondary">24 files</p>
					</div>
					<h6 class="text-primary mb-0">3.4 GB</h6>
				</div>
				<div class="d-flex align-items-center mt-3">
					<div class="fm-file-box bg-light-warning text-warning"><i class="bx bx-image"></i>
					</div>
					<div class="flex-grow-1 ms-2">
						<h6 class="mb-0">Other Files</h6>
						<p class="mb-0 text-secondary">458 files</p>
					</div>
					<h6 class="text-primary mb-0">3 GB</h6>
				</div>
				<div class="d-flex align-items-center mt-3">
					<div class="fm-file-box bg-light-info text-info"><i class="bx bx-image"></i>
					</div>
					<div class="flex-grow-1 ms-2">
						<h6 class="mb-0">Unknown Files</h6>
						<p class="mb-0 text-secondary">57 files</p>
					</div>
					<h6 class="text-primary mb-0">178 GB</h6>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-9">
		<div class="card">
			<div class="card-body">
				
				<div class="row mt-3">
					<div class="col-12 col-lg-4">
						<div class="card shadow-none border radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="fm-icon-box radius-15 bg-primary text-white"><i class="lni lni-google-drive"></i>
									</div>
									<div class="ms-auto font-24"><i class="fa fa-ellipsis-h"></i>
									</div>
								</div>
								<h5 class="mt-3 mb-0">Google Drive</h5>
								<p class="mb-1 mt-4"><span>45.5 GB</span>  <span class="float-end">50 GB</span>
								</p>
								<div class="progress" style="height: 7px;">
									<div class="progress-bar bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="card shadow-none border radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="fm-icon-box radius-15 bg-danger text-white"><i class="lni lni-dropbox-original"></i>
									</div>
									<div class="ms-auto font-24"><i class="fa fa-ellipsis-h"></i>
									</div>
								</div>
								<h5 class="mt-3 mb-0">Dropbox</h5>
								<p class="mb-1 mt-4"><span>1,2 GB</span>  <span class="float-end">3 GB</span>
								</p>
								<div class="progress" style="height: 7px;">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 45%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="card shadow-none border radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="fm-icon-box radius-15 bg-warning text-dark"><i class="bx bxs-door-open"></i>
									</div>
									<div class="ms-auto font-24"><i class="fa fa-ellipsis-h"></i>
									</div>
								</div>
								<h5 class="mt-3 mb-0">OneDrive</h5>
								<p class="mb-1 mt-4"><span>2,5 GB</span>  <span class="float-end">3 GB</span>
								</p>
								<div class="progress" style="height: 7px;">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<h5>Folders</h5>
				<div class="row mt-3">
					<div class="col-12 col-lg-4">
						<div class="card shadow-none border radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="font-30 text-primary"><i class="bx bxs-folder"></i>
									</div>
									<div class="user-groups ms-auto">
										<img src="https://bootdey.com/img/Content/avatar/avatar1.png" width="35" height="35" class="rounded-circle" alt="">
										<img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="35" height="35" class="rounded-circle" alt="">
									</div>
									<div class="user-plus">+</div>
								</div>
								<h6 class="mb-0 text-primary">Analytics</h6>
								<small>15 files</small>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="card shadow-none border radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="font-30 text-primary"><i class="bx bxs-folder"></i>
									</div>
									<div class="user-groups ms-auto">
										<img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="35" height="35" class="rounded-circle" alt="">
									</div>
								</div>
								<h6 class="mb-0 text-primary">Assets</h6>
								<small>345 files</small>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="card shadow-none border radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="font-30 text-primary"><i class="bx bxs-folder"></i>
									</div>
									<div class="user-groups ms-auto">
										<img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="35" height="35" class="rounded-circle" alt="">
										<img src="https://bootdey.com/img/Content/avatar/avatar3.png" width="35" height="35" class="rounded-circle" alt="">
									</div>
								</div>
								<h6 class="mb-0 text-primary">Marketing</h6>
								<small>143 files</small>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="d-flex align-items-center">
					<div>
						<h5 class="mb-0">Choose File To Download</h5>
						

					</div>
					<div class="ms-auto"><a href="javascript:;" class="btn btn-sm btn-outline-secondary">View all</a>
					</div>
				</div>
				<div class="table-responsive mt-3">
				<table class="table ">
						<?php include 'process-download.php';?>
						<thead>
						<tr>
						<th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Size</th>
						<th scope="col">Download</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($files as $file): ?>
							<tr>
							<td><?php echo $file['id']; ?></td>
							<td><?php echo $file['name']; ?></td>
							<td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
							
							<td><a href="upload-index.php?id=<?php echo $file['id'] ?>"><i class="fas fa-download"></i></a></td>
							</tr>
						<?php endforeach;?>

						</tbody>
</body>						
				</table>
				</div>
			</div>
		</div>
	</div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>