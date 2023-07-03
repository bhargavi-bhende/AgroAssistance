<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

    // Database configuration
    $host = 'localhost';
    $username = 'root';
    $password = 'Test@123';
    $dbname = 'mytutor';

    // Create a MySQLi connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Prepare and bind the SQL statement to prevent SQL injection
    $stmt = $conn->prepare('INSERT INTO student (name, email, mobile, city) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('ssss', $name, $email, $mobile, $city);

    // Execute the statement
    if ($stmt->execute()) {
        echo 'Data inserted successfully.';
    } else {
        echo 'Error: ' . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <title>Home</title>
</head>
<body>
    <form action="#" method="POST">
        Name: <input type="text" name="name"> <br>
        Email: <input type="email" name="email"> <br>
        Mobile: <input type="number" name="mobile"> <br>
        City: <input type="text" name="city"> <br>
        <input type="submit" name="submit" value="Send Data">
    </form>
</body>
</html>
