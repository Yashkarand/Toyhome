<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$FirstName = $_POST['firstname'];
$LastName = $_POST['lastname'];
$email = $_POST['email'];
$password1 = $_POST['password'];
// Check if email already exists
$sql_check_email = "SELECT * FROM signin WHERE email='$email'";
$result_check_email = $conn->query($sql_check_email);
if ($result_check_email->num_rows > 0) {
die("Email already exists.");
}

// Insert data into database
$sql = "INSERT INTO signin (firstname, lastname, email, password)
VALUES ('$FirstName', '$LastName','$email', '$password1')";
if ($conn->query($sql) === TRUE) {
echo "Registration successful!";
echo "Thank you for registering, " . $FirstName . "!<br>";
echo "You'll be redirected to login page in 3 seconds";
header("refresh:3;url=login1.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>