<?php
$host = "your-rds-endpoint";
$user = "admin";
$pass = "yourpass";
$dbname = "student_db";

// Connect
$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

echo "<h1>Student List</h1>";
while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"]. " | Email: " . $row["email"]. "<br>";
}

$conn->close();
?>
