<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql ="INSERT INTO `feedback`(`Username`, `Email id`, `Feedback`) VALUES ('".$_POST['MyName']."','".$_POST['email']."','".$_POST['feedback']."')";


if ($conn->query($sql) === TRUE) {
   echo "<script type='text/javascript'>alert('$Feedback saved successfully');</script>"
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>






