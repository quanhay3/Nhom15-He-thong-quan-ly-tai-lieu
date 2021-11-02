<?php
if(isset($_GET['path']))
{
//Đọc URL
$url = $_GET['path'];

//Clear the cache
clearstatcache();

//Kiểm tra xem đường dẫn có tồn tại không
if(file_exists($url)) {

//Định nghĩa thông tin phần header
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($url).'"');
header('Content-Length: ' . filesize($url));
header('Pragma: public');

//Clear đầu ra hệ thống
flush();

//Đọc file
readfile($url,true);

//Terminate from the script
die();
}
else{
echo "File path does not exist.";
}
}
echo "File path is not defined."

?>