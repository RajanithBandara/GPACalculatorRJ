<?php
include 'login.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("SELECT PasswordE FROM registereduser WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($hashedPassword);

    if ($stmt->fetch()) {
        // Password verification
        if (password_verify($password, $hashedPassword)) {
            echo "Login successful!";
            // Add your session handling or redirection logic here
        } else {
            echo "Error: Invalid password.";
        }
    } else {
        echo "Error: User not found.";
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>
