<?php
    session_start();
    if(isset($_SESSION['mySession'])){
        unset($_SESSION['mySession']);

    }
    header('location:http://localhost:81/Nhom15-He-thong-quan-ly-tai-lieu/');



?>