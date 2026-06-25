<?php
    require_once("connect.php");

    $id = $_GET["id"];
    echo $id;
    $query = "DELETE FROM user WHERE loginId = '$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "Record Deleted";
    } else {
        echo "Record Not Deleted";
    }
    header("Location: task-03.php");

?>