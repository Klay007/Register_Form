<?php include('service.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form action="home.php" method = "post">
        <!-- Display validation errors  -->
        <?php include ('errors.php')?>
        <div class="input-group">
            <label >Username</label>
            <input type="text" name = "username">
        </div>
        <div class="input-group">
            <label >Email</label>
            <input type="text" name = "email">
        </div>
        <div class="input-group">
            <label >Password</label>
            <input type="password" name = "password_1">
        </div>
        <div class="input-group">
            <label >Confirm Password</label>
            <input type="password" name = "password_2">
        </div>
        <div class="input-group">
            <button type = "submit " name = "register" class="btn">Register</button>
        </div>
        <p>
            Already a member? <a href="process.php">Sign In</a>

        </p>
    
    </form>
</body>
</html>