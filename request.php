<?php
    if(isset($_POST['product']) && isset($_POST['quantity']))
    {
        $product = $_POST['product'];
        $quantity = $_POST['quantity'];
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "buyer1";
        $conn = mysqli_connect($host, $user, $pass, $db) or die('Error Connecting');
        
        // Generate a unique request ID
        $requestId = uniqid();
        
        $insertQuery = "INSERT INTO requests (request_id, product, quantity) VALUES ('$requestId', '$product', '$quantity')";
        $result = mysqli_query($conn, $insertQuery);
        
        if ($result) {
            echo "<script>alert('Request submitted successfully! Request ID: ".$requestId.". Request will be delivered to the farmers nearby.');</script>";
            echo "<script>window.location.href='dashboard2.html';</script>";
        } else {
            echo "<script>alert('Error submitting request. Please try again later.');</script>";
        }
    }
?>
