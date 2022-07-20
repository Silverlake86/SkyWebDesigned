<?php
    session_start();
    //Get values pass from frm in index.php.
    $name = $_POST['name'];
    $department = $_POST['department'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //To prevent mysql injection
    $name = stripcslashes($name);
    $department = stripcslashes($department);
    $phone = stripcslashes($phone);
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    //$username = mysqli_real_escape_string($username);
    //$password = mysqli_real_escape_string($password);

    function alert($msg) 
    {
    echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    //Connect to the server and select database
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "project");

    //Query
    $sql = mysqli_query($con, "INSERT INTO member (Name, Department, phone, username, password) VALUES ('$name', '$department', '$phone', '$username', '$password')");

    header("Location: member_list.php", true, 301);
    exit();

    //if (mysqli_query($con, $sql))
    //{
    //    alert("Success!");
    //}
    //else
    //{
    //    alert("Fail!");
    //}

?>