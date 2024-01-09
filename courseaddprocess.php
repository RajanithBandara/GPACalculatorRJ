<?php
include 'login.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $courseName = $_POST["course-name"];
    $numberOfYears = $_POST["number-of-years"];
    $numberOfCredits = $_POST["number-of-credits"];
    $numberOfSemesters = $numberOfYears * 2;
    // SQL query to insert data into the database
    $sql = "INSERT INTO your_table_name () VALUES ('$courseName', '$numberOfYears', '$numberOfCredits')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
