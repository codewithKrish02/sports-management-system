<?php
$myusername = $_POST['u'];
$mypassword = $_POST['p'];
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = "sportpro";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

$sql = "SELECT email FROM login WHERE email = '$myusername' and password = '$mypassword'";
$result =$conn->query($sql);
$num_rows = mysqli_num_rows($result);
echo $num_rows;
if($num_rows==1)
{

 echo'<script> window.location="after_login_index.html"; </script> ';
//echo $num_rows;
}

else
{
	
echo '<script type="text/javascript">'; 
echo 'alert("Invalid username or password");'; 
echo 'window.location.href = "login.html";';
echo '</script>';  
	
}

$conn->close();
?>