<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'buyer1';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT product, quantity FROM requests"; 
$result = mysqli_query($conn, $query);

mysqli_close($conn);

$table = '<table style="border-collapse: collapse; width: 100%;">';
$table .= '<tr style="border: 1px solid black;"><th style="border: 1px solid black; padding: 8px; text-align: left;">Product</th><th style="border: 1px solid black; padding: 8px; text-align: left;">Quantity</th><th style="border: 1px solid black; padding: 8px; text-align: left;">Status</th></tr>';

while ($row = mysqli_fetch_assoc($result)) {
    $product = $row['product'];
    $quantity = $row['quantity'];

    $table .= '<tr style="border: 1px solid black;"><td style="border: 1px solid black; padding: 8px;">' . $product . '</td><td style="border: 1px solid black; padding: 8px;">' . $quantity . '</td><td style="border: 1px solid black; padding: 8px;"><a href="accept.html">Accept</a></td></tr>';
}

$table .= '</table>';

echo $table;
?>
