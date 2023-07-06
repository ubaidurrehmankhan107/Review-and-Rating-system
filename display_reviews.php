<?php
// Assuming you have a database connection established
// Adjust the following code based on your database configuration

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "review";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the reviews from the database
$sql = "SELECT * FROM reviews ORDER BY id DESC";
$result = $conn->query($sql);

// Display the reviews
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="review">';
        echo '<h3>Rating: ' . $row['rating'] . ' stars</h3>';
        echo '<h4>Title: ' . $row['review_title'] . '</h4>';
        echo '<p>' . $row['review_text'] . '</p>';
        echo '</div>';
    }
} else {
    echo 'No reviews found.';
}

// Close the database connection
$conn->close();
?>
