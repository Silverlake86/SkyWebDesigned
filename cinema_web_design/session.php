<?php
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "uas");

    session_start();

    $user_check = $_SESSION['login_user'];

    $sql = mysqli_query($con, "SELECT email FROM login WHERE email = '$user_check'");
    $row = mysqli_fetch_assoc($sql);
    $login_session = $row['email'];

    if(!isset($login_session))
    {
        mysql_close($con);
        header('Location: cinema.php?page=page4');
    }
?>