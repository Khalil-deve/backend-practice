<?php
require_once("connect.php");

//Task Number 02
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $address = $_POST['add'];
    $login = $_POST['login'];
    $password = $_POST['pass'];

    if (empty($name)) {
        $message = "Please Enter Your Name";
        echo $message;
    } else if (empty($email)) {
        $message = "Please Enter Your Email";
        echo $message;
    } else if (empty($address)) {
        $message = "Please Enter Your Address";
        echo $message;
    } else if (empty($login)) {
        $message = "Please Enter Your Login ID";
        echo $message;
    } else if (empty($password)) {
        $message = "Please Enter Your Password";
        echo $message;
    } else {
        $message = "All Fields Are Filled";
    }

    if ($message == "All Fields Are Filled") {
        $query = "INSERT INTO user (name, gender, email, password, address, loginId) VALUES ('$name', '$gender', '$email', '$password', '$address', '$login')";
        $result = mysqli_query($connect, $query);
        if ($result) {
            echo "<br>Record has been Added";
        } else {
            echo "Record Not Added";
        }
    }
}
?>

<html>
<script language="javascript">
    function validation() {
        const error_message = document.getElementById("error");
        if (document.getElementById("name").value == '') {
            error_message.innerHTML = "Please fill the input field";
            return false;
        } else if (document.getElementById("email").value == '') {
            error_message.innerHTML = "Please fill the input field";
            return false;
        } else if (document.getElementById("add").value == '') {
            error_message.innerHTML = "Please fill the input field";
            return false;
        } else if (document.getElementById("login").value == '') {
            error_message.innerHTML = "Please fill the input field";
            return false;
        } else if (document.getElementById("pass").value == '') {
            error_message.innerHTML = "Please fill the input field";
            return false;
        } else if (!document.getElementById("chk").checked) {
            error_message.innerHTML = "Please Agree with Policy";
            return false;
        }
        return true;
    } 
</script>

<head>
    <title>Task 01</title>
</head>

<body>
    <h2>Sign Up Form</h2>
    <form action="" method="post" onSubmit="return validation();">
        <input type="hidden" name="ck" value="1">
        <table>
            <tr>
                <td width="10%">Name:</td>
                <td width="90%"><input type="text" name="name" id="name"></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value="male" checked>Male <br>
                    <input type="radio" name="gender" value="female">Female
                </td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="add" id="add"></textarea></td>
            </tr>

            <tr>
                <td>Login ID:</td>
                <td><input type="text" name="login" id="login"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass" id="pass"></td>
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