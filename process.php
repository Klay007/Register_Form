<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form action="process.php" method = "post">
        <div class="input-group">
            <label >Username</label>
            <input type="text" name = "username">
        </div>
        <div class="input-group">
            <label >Password</label>
            <input type="password" name = "password_1">
        </div>
       
        <div class="input-group">
            <button type = "submit " name = "Login" class="btn">Login</button>
        </div>
        <p>
            Not yet a member? <a href="home.php">Sign Up</a>

        </p>
    
    </form>
</body>
</html>