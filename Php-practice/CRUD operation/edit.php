<?php
require_once("connect.php");

$id = $_GET["id"];
echo $id;
$query = "SELECT * FROM user WHERE loginId = '$id'";
$result = mysqli_query($connect, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $email = $row["email"];
        $gender = $row["gender"];
        $address = $row["address"];
        $login = $row["loginId"];
        $password = $row["password"];
    }
}

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $address = $_POST['add'];
    $login = $_POST['login'];
    $password = $_POST['pass'];

    $query = "UPDATE user SET name = '$name', gender = '$gender', email = '$email', password = '$password', address = '$address', loginId = '$login' WHERE loginId = '$id'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        echo "<br>Record is Updated";
        header("Location: task-03.php");
    } else {
        echo "Record Not Updated";
    }

}


// header("Location: task-03.php");

?>

<html>

<head>
    <title>Update</title>
</head>

<body>
    <h2>Sign Up Form</h2>
    <form action="" method="Post" onSubmit="return validation();">
        <input type="hidden" name="ck" value="1">
        <table>
            <tr>
                <td width="10%">Name:</td>
                <td width="90%"><input type="text" name="name" id="name" value="<?php echo $name; ?>"></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value="male" <?php if ($gender == "male")
                    echo "checked"; ?>>Male
                    <br>
                    <input type="radio" name="gender" value="female" <?php if ($gender == "female")
                        echo "checked"; ?>>Female
                </td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="add" id="add"><?php echo $address; ?></textarea></td>
            </tr>

            <tr>
                <td>Login ID:</td>
                <td><input type="text" name="login" id="login" value="<?php echo $login; ?>"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass" id="pass" value="<?php echo $password; ?>"></td>
            </tr>

            <tr>
                <td>Agreed with Policy:</td>
                <td><input type="checkbox" name="agree" id="chk"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" value="Reset">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p id="error"></p>
                </td>
            </tr>
        </table>

    </form>
</body>

</html>