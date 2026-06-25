<?php
require_once("connect.php");

//Task Number 04


$query = "Select * from user ";
$result = mysqli_query($connect, $query);
if ($result) {
    // echo "<br>Fetched Successfully";
    echo "<br>";
    echo "<table>";
    echo "<tr>";
    echo "<td>Name</td>";
    echo "<td>Email</td>";
    echo "<td>Gender</td>";
    echo "<td>Edit</td>";
    echo "<td>Delete</td>";
    echo "</tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        // echo $row["loginId"];
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td><a href='edit.php?id=" . $row["loginId"] . "'>Edit</a></td>";
        echo "<td><a href='delete.php?id=" . $row["loginId"] . "'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";

} else {
    echo "Record Not Added";
}

?>