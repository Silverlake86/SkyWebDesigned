<?php
    //Get values pass from frm in index.php.
    $container = $_POST['container'];

    //To prevent mysql injection
    $container = stripcslashes($container);
    
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
    $sql = mysqli_query($con, "UPDATE task_list SET status = 'COMPLETE' WHERE task_id = '$container'");


    header("Location: task_list.php", true, 301);
    exit();
?>