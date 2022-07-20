<?php
    session_start();
    //Get values pass from frm in index.php.
    $task_name = $_POST['task_name'];
    $username = $_POST['username'];
    $date_posted = $_POST['date_posted'];
    $due_date = $_POST['due_date'];
    $description = $_POST['description'];

    //To prevent mysql injection
    $task_name = stripcslashes($task_name);
    $username = stripcslashes($username);
    $date_posted = stripcslashes($date_posted);
    $due_date = stripcslashes($due_date);
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
    $sql = mysqli_query($con, "INSERT INTO task_list (task_name, Name, Description, Date_Posted, Due_Date, status) VALUES ('$task_name', '$username', '$description', '$date_posted', '$due_date', 'PENDING')");

    header("Location: task_list.php", true, 301);
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