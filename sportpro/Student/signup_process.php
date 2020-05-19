<?php
$username=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$contact=$_POST['number'];
$class=$_POST['clas'];
$servername = "localhost";
$username1 = 'root';
$password1 = '';
$dbname = "sportpro";
// Create connection
$conn = new mysqli($servername, $username1, $password1,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
$sql = "INSERT INTO login(username,password,email,contact,class)VALUES ('$username','$password','$email','$contact','$class')";
if ($conn->query($sql) === TRUE) {	
 //$message = "Event Added Successfully";
 // echo "<script type='text/javascript'>alert('$message');</script>";
  //header('Location: Add Events.html'); 

echo '<script type="text/javascript">'; 
echo 'alert("SignUp Sucessfull");'; 
echo 'window.location.href = "login.html";';
echo '</script>';  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>