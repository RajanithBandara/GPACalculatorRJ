<?php
// Replace these values with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gpadatastore";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];

    // Add your validation logic here
    if ($password === $confirmPassword) {
        // Passwords match, proceed with database insertion
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password

        // Prepare and execute the SQL statement
        $stmt = $conn->prepare("INSERT INTO registereduser (Email, PasswordE) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $hashedPassword);

        if ($stmt->execute()) {
            echo "Registration successful! Email: $email";
            $directname = "Users/";
            $mk_file_name = "$email";
            $mk_file = mkdir($directname.$mk_file_name, 0777);
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        // Passwords do not match, handle the error accordingly
        echo "Error: Passwords do not match.";
    }
}

// Close the database connection
$conn->close();
?>
