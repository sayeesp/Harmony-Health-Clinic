<!DOCTYPE html>
<html>
<body>
<h1 style="text-align: center;">Admin Panel</h1>
<hr />

<?php
$doctor = $_POST["doctor"];
$field = $_POST["field"];

if (empty($doctor) || empty($field)) {
    die('Incomplete data provided.');
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinicdb";
$tablename = "department";

// Establish a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO $tablename (name, field) VALUES ('$doctor', '$field')";

if ($conn->query($sql) === TRUE) {
    echo "Success! Dr. " . htmlspecialchars($doctor) . ", specialized in " . htmlspecialchars($field) . ", has been added to our hospital's department.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
