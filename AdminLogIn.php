<?php
error_reporting(0);
session_start(); // Starting Session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";
$admin_name=$_POST['Username'];  
$admin_pass=$_POST['Password'];  
//$message="";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	//$sql = "select * from login where password='$password' AND username='$username'";
		$sql="SELECT * FROM `login` WHERE Username='$_POST[name]' AND Password='$_POST[pass]'";
	$result = $conn->query($sql);
	
	if ($result->num_rows == 1) 
	{
		//echo "<script>alert(' Fill  details');</script>";
		$_SESSION['login_user']=$username; 
		header("location:http://www.facebook.com"); 
	}
	else
	{
		
		echo "<script>alert(' Fill all details');</script>";
		
	}
	$conn->close();

?>
<html>
<head>
<link rel="stylesheet" href="css/login.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- <script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#down").slideDown("slow");


    });
});
</script> -->
</head>
<body>
<form id="down" method="psot" >
<table>
 <tr>
<br><h1><br>Admin Login </h1>
 <td>
	<div class="circle">
                       
	</div>
 </td>
    <td >       
	<input placeholder="Username" type="text" name="name">	
	<input placeholder="Password" type="password" name="pass">
	<input  type="Submit" text="Submit" name="submit" class="button">
	
</td>

</table>
</form> 
</body>
</html>