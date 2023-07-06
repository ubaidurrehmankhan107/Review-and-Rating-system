<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "review";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle review submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rating = $_POST['rating'];
    $reviewTitle = $_POST['review_title'];
    $reviewText = $_POST['review_text'];

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO reviews (rating, review_title, review_text) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $rating, $reviewTitle, $reviewText);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Review successfully inserted
        header('Location: index.php');
        exit();
    } else {
        // Error occurred while inserting the review
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
