<?php 

include('../config/connect.php');


if (isset($_POST['upload'])) { // If isset upload button or not
	// Declaring Variables
	$location = "uploads/";
	$file_name = $_FILES["file"]["name"]; // Get uploaded file name
	$file_temp = $_FILES["file"]["tmp_name"]; // Get uploaded file temp
	$file_size = $_FILES["file"]["size"]; // Get uploaded file size
	if ($file_size > 10485760) { // Check file size 10mb or not

		echo "<script>alert('Tải lên không thành công. Dung lượng quá lớn.')</script>";

	} else {
		$sql = "INSERT INTO documents (name, size)
				VALUES ('$file_name', '$file_size')";
		$result = mysqli_query($conn, $sql);
		if ($result) {

			echo "<script>alert('Tải lên thành công.')</script>";


			// Select id from database
			$sql = "SELECT id FROM documents ORDER BY id DESC";
			$result = mysqli_query($conn, $sql);
			
		} else {

			echo "<script>alert('Không tải lên được.')</script>";


		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<link rel="stylesheet" type="text/css" href="style.css">

	<title>File Upload PHP Script - Pure Coding</title>
</head>
<body>
	<div class="file__upload">
		<div class="header">
			<p><i class="fa fa-cloud-upload fa-2x"></i><span><span>up</span>load</span></p>			
		</div>
		<a href="http://localhost:81/Nhom15-He-thong-quan-ly-tai-lieu/admin/user-index.php"><i style="color:black;padding:10px;" class="fas fa-home fa-2x"></i></a>
		<form action="" method="POST" enctype="multipart/form-data" class="body">
			<input type="file" name="file" id="upload" required>
			<label for="upload">
				<i class="fa fa-file-text-o fa-3x"></i>
				<p>
					<strong>Drag and drop</strong> files here<br>
					or <span>browse</span> to begin the upload
				</p>
			</label>
			<button name="upload" class="btn">Upload</button>
		</form>
	</div>
</body>
</html>