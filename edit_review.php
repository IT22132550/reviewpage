<?php

include_once ('Include/connection.php');

// Check if the connection was successful
if (!$connection) {
    echo "Database connection failed.";
    exit;
}

// Check if the review ID is provided
if (!isset($_GET['id'])) {
    echo "Review ID not provided.";
    exit;
}

$id = $_GET['id'];

// Retrieve the review from the database
$query = "SELECT * FROM reviews WHERE reviewId = $id";
$result = mysqli_query($connection, $query);

// Check if the review exists
if (mysqli_num_rows($result) == 0) {
    echo "Review not found.";
    exit;
}

$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$rating = $row['rating'];
$review = $row['review'];

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];

    // Update the review in the database
    $updateQuery = "UPDATE reviews SET name = '$name', rating = '$rating', review = '$review' WHERE reviewId = $id";
    $updateResult = mysqli_query($connection, $updateQuery);

    if ($updateResult) {
        echo "Review submitted successfully.";
        mysqli_close($connection);
        echo '<script>alert("Review edited successfully.");</script>';
        echo '<script>window.location.href = "review.php";</script>';
        exit;;
    } else {
        echo "Failed to update the review.";
    }
}

// Close the database connection
mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe world | Edit Review</title>
    <link rel="stylesheet" href="./edit_review.css">
</head>
<body>
    <div class="editreview">
        <h1>Edit Review</h1>
        <form method="POST" action="edit_review.php?id=<?php echo $id; ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
            <label for="rating">Rating:</label>
            <input type="number" id="rating" name="rating" value="<?php echo $rating; ?>" min="1" max="5" required>
            <label for="review">Review:</label>
            <textarea id="review" name="review" required><?php echo $review; ?></textarea>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>

