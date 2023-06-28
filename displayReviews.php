<?php include_once ('Include/connection.php'); ?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="displayreviwe.css">
    </head>
    <body>
    <?php
       
        // Check if the connection was successful
        if (!$connection) {
            echo "Database connection failed.";
        } else {
            // Retrieve the reviews from the database
            $query = "SELECT * FROM reviews";
            $result = mysqli_query($connection, $query);

            // Check if there are any reviews
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['reviewId'];
                    $name = $row['name'];
                    $rating = $row['rating'];
                    $review = $row['review'];

                    // Display the review
                    echo "<div class='review'>";
                    echo "<h3>$name</h3>";
                    echo "<p>Rating: $rating</p>";
                    echo "<p>$review</p>";
                    echo "<p>";
                    echo "<a href='edit_review.php?id=$id'>Edit</a> | ";
                    echo "<a href='delete_review.php?id=$id'>Delete</a>";
                    echo "</p>";
                    echo "</div>";
                }
            } else {
                echo "<div class='review'>";
                echo "No reviews found.";
                echo "</div>";
            }

            // Close the database connection
            mysqli_close($connection);
        }
        ?>
    </body>
</html>
