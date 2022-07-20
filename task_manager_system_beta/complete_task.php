<?php
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "project");
    if($con -> connect_error)
    {
        die("Connection failed:". $con -> connect_error);
    }
    
    $sql = "SELECT * FROM task_list WHERE status = 'COMPLETE'";
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie = edge">
        <link href = "https://fonts.googleapis.com/css?family=Poppins" rel = "stylesheet">
        <link rel="stylesheet" href="task_list.css">
        <title>NAVIGATION</title>
    </head>

    <body>
        <nav>
            <div class = "logo">
                <h4>Task Manager</h4>
            </div>
            <ul class = "nav-links">
                <li>
                    <a href = "index.php">Home</a>
                </li>
                <li>
                    <a href = "task_list.php">Task List</a>
                </li>
                <li>
                    <a href = "add_task.php">Add Task</a>
                </li>
                <li>
                    <a href = "complete_task.php">Completed</a>
                </li>
                <li>
                    <a href = "register.php">Register</a>
                </li>
            </ul>
            <div class="burger">
                <div class = "line1"></div>
                <div class = "line2"></div>
                <div class = "line3"></div>
            </div>
        </nav>
        <script src = "app.js"></script>

    <div class = "task-table">
        <?php
            $result = $con -> query($sql);
            if ($result -> num_rows > 0)
            {
                while ($row = $result -> fetch_assoc())
                {
                    echo '<div class = "col">';
                        echo '<div class = "table">';
                            echo "<h2>". $row["task_name"] ."</h2></br>";
                            echo '<div class = "price">';
                                echo $row["Description"];
                            echo '</div>';

                            echo '<ul>';
                                echo "<li><h4>Posted By: </h4>". $row["Name"] ."</li>";
                                echo "<li><h4>Date Posted: </h4>". $row["Date_Posted"] ."</li>";
                                echo "<li><h4>Due Date: </h4>". $row["Due_Date"] ."</li></br></br>";
                                echo "<li><h4>Status: </h4>". $row["status"] ."</li>";
                            echo'</ul>';
                        echo '</div>';
                    echo '</div>';
                }   
            }
            else
            {
                echo "0 result";
            }
        ?>
    </div>
    </body>
</html>