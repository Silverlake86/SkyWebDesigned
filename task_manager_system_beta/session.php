<?php
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "project");

    session_start();

    $user_check = $_SESSION['login_user'];

    $sql = mysqli_query($con, "SELECT username FROM member WHERE username = '$user_check'");
    $row = mysqli_fetch_assoc($sql);
    $login_session = $row['username'];

    if(!isset($login_session))
    {
        mysql_close($con);
        header('Location: index.php');
    }
?>