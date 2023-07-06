<!DOCTYPE html>
<html>
<head>
    <title>Review and Rating System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Review and Rating System</h1>

    <!-- Review Form -->
    <form method="post" action="submit_review.php">
        <label for="rating">Rating:</label>
        <select name="rating" id="rating">
            <option value="1">1 star</option>
            <option value="2">2 stars</option>
            <option value="3">3 stars</option>
            <option value="4">4 stars</option>
            <option value="5">5 stars</option>
        </select>
        <br>

        <label for="review_title">Title:</label>
        <input type="text" name="review_title" id="review_title" required>
        <br>

        <label for="review_text">Review:</label>
        <textarea name="review_text" id="review_text" rows="4" required></textarea>
        <br>

        <input type="submit" value="Submit Review">
    </form>

   <!-- Display Reviews -->
<h2>Reviews:</h2>
<div id="reviews_container">
    <?php include('display_reviews.php'); ?>
</div>


    <script src="script.js"></script>
</body>
</html>
