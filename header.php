<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo isset($title) ? $title : 'Demo Site'; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="headerDiv">
    <ul>
        <li><a  href="login.php">Login</a></li>
        <li><a href="signup.php">Signup</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
    </ul>
        <!-- <div class="menuItems">
            <a class = "active" href="login.php">Login</a>
        </div>
        <div class="menuItems">
            <a href = "signup.php" >SignUp</a>
        </div>
        <div class="menuItems">
            <a href="dashboard.php">Dashboard</a>
        </div>   -->
    </div>
