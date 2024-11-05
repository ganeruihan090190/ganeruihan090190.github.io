<?php
// Database connection
$host = 'localhost'; // Change if your database is on a different host
$user = 'root'; // Your MySQL username
$password = ''; // Your MySQL password
$dbname = 'account'; // Your database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashed_password);

// Execute the statement
if ($stmt->execute()) {
    // Redirect to login page after successful registration
    header("Location: setelah-reg.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}


// Close the statement and connection
$stmt->close();
$conn->close();
?>

