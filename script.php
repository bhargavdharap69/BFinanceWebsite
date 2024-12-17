<?php
$servername = "localhost"; // Typically 'localhost'
$username = "root"; // Your MySQL username
$password = "Bhargav@2208"; // Your MySQL password (usually empty for localhost)
$dbname = "articles_db"; // The database name you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample data (this would be dynamic in a real-world scenario)
$title = "Sample Article Title";
$content = "This is the content of the article.";

// Insert article into the database
$sql = "INSERT INTO articles (title, content) VALUES ('$title', '$content')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
