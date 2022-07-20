<?php
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "project");
    if($con -> connect_error)
    {
        die("Connection failed:". $con -> connect_error);
    }
    
    $sql = "SELECT * FROM member";
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie = edge">
        <link href = "https://fonts.googleapis.com/css?family=Poppins" rel = "stylesheet">
        <link rel="stylesheet" href="member_list.css">
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

        <table class = "content-table">
            <thead>

                <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Phone</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>

                <tbody>
                    <?php
                        $result = $con -> query($sql);
                        if ($result -> num_rows > 0)
                        {
                            while ($row = $result -> fetch_assoc())
                            {
                                echo '<tr>';
                                    echo "<td>". $row["name"] ."</td>";
                                    echo "<td>". $row["department"] ."</td>";
                                    echo "<td>". $row["phone"] ."</td>";
                                    echo "<td>". $row["username"] ."</td>";
                                    echo "<td>". $row["password"] ."</td>";
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </thead>

        </table>
        
    </body>
</html>