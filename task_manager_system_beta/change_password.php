<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie = edge">
        <link href = "https://fonts.googleapis.com/css?family=Poppins" rel = "stylesheet">
        <link rel="stylesheet" href="register.css">
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

        <div class = "wrap">
            <h2> Register </h2>
            <form action = "change.php" method = "POST">
                <input type = "text" placeholder = "username" name = "username" required>
                <input type = "password" placeholder = "previous password" name = "previous" required>
                <input type = "password" placeholder = "new password" name = "new" required>
                <input type = "submit" name = "submit" value = "Change Password">
            </form>
        </div>

        <div class = "wrapper">
            <div class = "btn">
                <a href = "member_list.php"><button type = "button" id = "button"> Member List </button></a>
            </div>
            <br>
        </div>
        
    </body>
</html>