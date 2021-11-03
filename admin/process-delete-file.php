<?php
	include ('../config/connect.php');

	$sql = "DELETE FROM documents WHERE id='" . $_GET["id"] . "'";

	if (mysqli_query($conn, $sql)) {

	    echo "File deleted successfully";
		header("location:delete-file-index.php?response=$response");

	} else {
	
	    echo "Error: " . mysqli_error($conn);
		header("location:delete-file-index.php?response=$response");
		
	}
	mysqli_close($conn);
?>