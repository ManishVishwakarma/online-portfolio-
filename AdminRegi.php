<?php
if (isset($_POST['submit'])) 
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";
$message="";
error_reporting(0);
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql ="INSERT INTO `regi`(`Name`, `Email`, `Password`) VALUES('".$_POST['username']."','".$_POST['email']."','".$_POST['password']."')";


if ($conn->query($sql) == TRUE) {
   echo "<script type='text/javascript'>function myFunction(){ alert(' Registration successfully completed'); }</script>";

 //  header('Location:AdminLogIn.php');
   
   }
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	
}
?>
<html>
<head>
<link rel="stylesheet" href="css/login.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>
<body>
<form id="down" method="POST">
<table>
 <tr>
<br><h1><br>Admin Registration </h1>
 <td>
	<div class="circle">
                       
	</div>
 </td>
    <td >       
	<input placeholder="Username" type="text" name="username" required>	
	<input placeholder="Email" type="text" name="email" required>	
	
	<input placeholder="Password" type="password" name="password" required>
	<input  type="Submit" text="Register" class="button" name="submit" onclick="myFunction();">
	
</td>

</table>
</form> 
</body>
</html>