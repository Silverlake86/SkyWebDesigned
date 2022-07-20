<?php
    session_start();
    //Get values pass from frm in index.php.
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //To prevent mysql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    //$username = mysqli_real_escape_string($username);
    //$password = mysqli_real_escape_string($password);

    //Connect to the server and select database
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "project");

    //Query
    $result = mysqli_query($con, "SELECT * FROM member WHERE username = '$username' and password = '$password'")
    or die("Failed to query database. ".mysqli_error());
    $row = mysqli_fetch_array($result);
    if($row['username'] == $username && $row['password'] == $password)
    {
        $_SESSION['login_user'] = $username;
        header("Location: index.php", true, 301);
        exit();
        //echo "Login Success! Welcome, " .$row['Name'];
    }
    else
    {
        header("Location: login.html", true, 301);
        exit();
    }
?>