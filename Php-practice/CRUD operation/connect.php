<?php 

    $conn_url="localhost";
    $username="root";
    $password="";
    $db_name='student';

    $connect = mysqli_connect($conn_url, $username, $password, $db_name);

    if(!$connect){
        echo "Connection Failed";
    }else{
        echo "Connection Build Successfully";
    }
?>