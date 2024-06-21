<!DOCTYPE html>
<html>
<body>
<h1 align="center">DEPARTMENTS</h1><hr width="50%"/><br /><br />
<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "clinicdb";
$table = "department";

// Create connection
$conn = new mysqli($server, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlDept = "SELECT DISTINCT field FROM $table ORDER BY field";
$resultDept = $conn->query($sqlDept);

if ($resultDept->num_rows > 0) {
    // output data of each row
    while($rowDept = $resultDept->fetch_assoc()) {
        echo "<br/ ><font size='6'>" . $rowDept["field"]. "<font /><hr/>";

		$sql = "SELECT name, field FROM $table WHERE field = '$rowDept[field]'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<font size='4'>Doctor: " . $row["name"] . "<font /><br>";
			}
		} else {
			echo "No doctors found for this department.";
		}
	}
} else {
    echo "No departments found in hospital records.";
}

$conn->close();
?> 
</body>
</html>
