<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="file">File</label>
        <input type="file" name="uploadeFile">
        <button type="submit" name="tosubmit">Submit</button>
    </form>
</body>
</html>

<?php
 
    if(isset($_POST['tosubmit'])){
        $file = $_FILES['uploadeFile'];
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];
        $file_type = $file['type'];

        echo "File name:".$file_name;
        echo "<br>";
        echo "File type:" .$file_type;
        echo "<br>";
        echo "file location: ".$file_tmp;

        move_uploaded_file($file_tmp, 'img/'.$file_name);
    }

?>