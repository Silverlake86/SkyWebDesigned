<?php
    include('session.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie = edge">
        <link href = "https://fonts.googleapis.com/css?family=Poppins" rel = "stylesheet">
        <link rel="stylesheet" href="home-style.css">
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

        <section class = "b1">
            <div class = "in1">
                <div class = "content">
                    <h1>Welcome <i><?php echo $login_session; ?></i></h1>
                </div>
            </div>
        </section>
    </body>
</html>