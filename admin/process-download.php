<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'files_management');


$sql = "SELECT * FROM documents";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Downloads files
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // fetch file to download from database
    $sql = "SELECT * FROM documents WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'downloads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('downloads/' . $file['name']));
        readfile('downloads/' . $file['name']);

        // Now update downloads count
        //$newCount = $file['downloads'] + 1;
        //$updateQuery = "UPDATE documents SET downloads=$newCount WHERE id=$id";
        //mysqli_query($conn, $updateQuery);
        exit;
    }

}