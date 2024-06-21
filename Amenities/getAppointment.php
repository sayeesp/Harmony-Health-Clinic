<?php
$connection = mysql_connect("localhost","root","");
if (!$connection)
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("clinicdb", $connection);

$doctor = $_POST['doctor'];
$patient = $_POST['patient'];
$registration = $_POST['registration'];
$day = $_POST['day'];
$time = $_POST['time'];

$sql = "INSERT INTO appointments (doctor, patient, registration_number, appointment_day, appointment_time)
VALUES ('$doctor', '$patient', '$registration', '$day', '$time')";

if (!mysql_query($sql, $connection))
{
  die('Error: ' . mysql_error());
}

echo "<h3>APPOINTMENT DETAILS</h3><hr />";
echo "Thank you for scheduling your appointment with us. Below are the details of your appointment:<br /><br />";
echo "<u><b>Appointment Details:</b></u><br />";
echo "<b>Patient:</b> $patient<br />";
echo "<b>Doctor:</b> $doctor<br />";
echo "<b>Day:</b> Next Week's $day<br />";
echo "<b>Time Slot Booked:</b> $time";

mysql_close($connection);
?>
