<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        form{
        width: 30%;
        margin:100px auto;
        padding: 30px;
        border: 5px solid lightblue;
}
input{
    width: 100%;
    display: block;
}
button{
    border: none;
    padding: 10px;
    border-radius: 10px;
}

    </style>
    <div class ="container">
        <div class="row">
            <form action="upload-index.php" method="post" encytype="multipart/form-data">
            <h2>Upload Documents</h2>
            <input type="file" name="my file"><br>
            <button type ="submit" name="save">Upload</button>
        </div>
    </div>
</body>
</html>