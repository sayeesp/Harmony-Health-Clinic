<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book an Appointment</title>
<style>
.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  font-family: Arial, sans-serif;
}
h1 {
  text-align: center;
  color: #333;
}
form {
  margin-bottom: 20px;
}
label, input, select {
  display: block;
  margin-bottom: 10px;
}
input[type="text"], input[type="number"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
select {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
button:hover {
  background-color: #0056b3;
}
</style>
</head>
<body>
<div class="container">
  <h1>Book an Appointment</h1>
  <hr>
  <p><strong>Note:</strong></p>
  <ul>
    <li>Online appointments are available for the upcoming week only. For the current week, please visit the hospital to collect an advance token.</li>
    <li>Appointments can be scheduled between 8AM - 12PM and 2PM - 7PM from Monday to Saturday.</li>
    <li>Lunch break is observed from 12 noon to 1PM, and doctors will be on rounds from 1PM - 2PM.</li>
    <li>The hospital is closed on Sundays and public holidays, but emergency services are available.</li>
  </ul>
  <br>
  <form id="appointmentForm" name="appointmentForm" method="post" action="getAppointment.php">
    <label for="doctor">Select Doctor:</label>
    <select name="doctor" id="doctor" required>
      <option value="" disabled selected>Select Doctor</option>
      <option value="Dr. John Doe (Cardiology)">Dr. John Doe (Cardiology)</option>
      <option value="Dr. Jane Smith (Pediatrics)">Dr. Jane Smith (Pediatrics)</option>
      <!-- Add more options as needed -->
    </select>
    <label for="patientName">Full Name of Patient:</label>
    <input type="text" id="patientName" name="patientName" placeholder="John Smith" required>
    <label for="registrationNumber">Registration Number:</label>
    <input type="number" id="registrationNumber" name="registrationNumber" maxlength="10" required>
    <label for="appointmentDay">Select Appointment Day:</label>
    <select name="appointmentDay" id="appointmentDay" required>
      <option value="" disabled selected>Select Day</option>
      <option value="monday">Monday</option>
      <option value="tuesday">Tuesday</option>
      <option value="wednesday">Wednesday</option>
      <option value="thursday">Thursday</option>
      <option value="friday">Friday</option>
      <option value="saturday">Saturday</option>
    </select>
    <label for="appointmentTime">Select Appointment Time:</label>
    <select name="appointmentTime" id="appointmentTime" required>
      <option value="" disabled selected>Select Time Slot</option>
      <option value="8-8:30 AM">8-8:30 AM</option>
      <option value="8:30-9 AM">8:30-9 AM</option>
      <option value="9-9:30 AM">9-9:30 AM</option>
      <option value="9:30-10 AM">9:30-10 AM</option>
      <!-- Add more options as needed -->
    </select>
    <button type="submit" name="submitButton">Get Appointment</button>
  </form>
</div>
</body>
</html>
