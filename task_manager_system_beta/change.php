<?php
    session_start();
    //Get values pass from frm in index.php.
    $username = $_POST['username'];
    $previous = $password = md5($_POST['previous']);
    $new = $password = md5($_POST['new']);

    //To prevent mysql injection
    $username = stripcslashes($username);
    $previous = stripcslashes($previous);
    $new  = stripcslashes($new );
    //$username = mysqli_real_escape_string($username);
    //$password = mysqli_real_escape_string($password);

    //Connect to the server and select database
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "project");

    //Query
    $result = mysqli_query($con, "SELECT * FROM member WHERE username = '$username' and password = '$previous'")
    or die("Failed to query database. ".mysqli_error());
    $row = mysqli_fetch_array($result);
    if($row['name'] == $username && $row['password'] == $previous)
    {
        $sql = mysqli_query($con, "UPDATE member SET password = '$new' WHERE username = '$username'");

        header("Location: member_list.php", true, 301);
        exit();
    }
    else
    {
        header("Location: change_password.php", true, 301);
        exit();
    }
?>