<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Registration Page</title>
    <style>
    </style>
</head>
<body>
    <?php include 'header.php';?>
    <div class="main-div">

    <form action="http:\\localhost\GPACAL\registerprocess.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>

        <input type="submit" value="Submit">
    </form></div>
    <?php include 'footer.php';?>
</body>
</html>
