<?php
$host = 'localhost';
$username = 'root';
$password = 'Bhargav@2208';
$dbname = 'articles_db';

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch all articles
$sql = "SELECT * FROM articles ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Articles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            background-image: url('background.jpg'); /* Your image path */
            background-size: cover;
            background-position: center;
        }
        .article {
            background-color: #fff;
            margin: 20px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .article h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<h1>Latest Articles</h1>

<?php
if ($result->num_rows > 0) {
    // Output each article
    while ($row = $result->fetch_assoc()) {
        echo "<div class='article'>";
        echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
        echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
        echo "<small>Posted on " . $row['created_at'] . "</small>";
        echo "</div>";
    }
} else {
    echo "No articles found.";
}

$conn->close();
?>

</body>
</html>
