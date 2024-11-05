<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #c4def8; /* Soft yellow background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .registration-container {
            background-color: #b8cbf9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(93, 107, 212, 0.959);
            max-width: 450px;
            width: 100%;
            border: 2px solid rgb(54, 91, 213); /* Black border around form */
            border-left: 9px solid rgb(54, 91, 213) ;
            border-bottom:9px solid rgb(54, 91, 213) ;
        }

        h2 {
            text-align: center;
            color: #515dcd;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #515dcd;
        }

        .form-group input {
            width: 97%;
            padding: 10px;
            border: 1px solid #000000; /* Black border for input fields */
            border-radius: 5px;
            font-size: 16px;
            border-left: 5px solid rgb(54, 91, 213) ;
            border-bottom:5px solid rgb(54, 91, 213) ;
        }

        .form-group input:focus {
            border-color: #9bc0e8;
            outline: none;
        }

        .btn-submit {
            width: 100%;
            background-color: #515dcd;
            color: rgb(153, 229, 241);
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        .login-text {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #777;
        }

        .login-text a {
            color: #515dcd;
            text-decoration: none;
        }

        .login-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<form action="proses-register1.php" method="post">
    <?php
    include 'koneksi1.php'; // Include the database connection
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed_password);
    
        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }
    
        $stmt->close();
    }
    $conn->close();
    ?>
    <div class="registration-container">
        <h2>Register</h2>
        <form>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn-submit">Register</button>
        </form>
        <p class="login-text">Already have an account? <a href="Login.php">Login</a></p>
    </div>
    </form>
</body>
</html>