<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>

    </style>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php include 'header.php';?>
    <div class="main-div">
    <form action="http:\\localhost\GPACAL\loginprocess.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login">

        <p>Not a user? <a href="register.php">Register here</a></p>
    </form>
    </div>
    <?php include 'footer.php';?>
</body>
</html>
