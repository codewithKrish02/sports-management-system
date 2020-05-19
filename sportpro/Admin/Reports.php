<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<header>
<img src="../img/logo-removebg-preview.png" width="100px" height="80px">
<h1 class="liketext">RollBall Association of Andhrapradesh
<a href ="index.html"> <input type="button" value="Logout" style="float:right;"></a></h1>
</header>
<div class="row">
<nav>
		<div class="menu-icon">
			
		</div>
		<ul>
			<li><a href="Add Events.html">Add Events</a></li>
			<li><a href="Edit Events.php"">Edit Events</a></li>
			<li><a href="#" style="color:red;">Reports</a></li>
			<li><a href="Results.php" >Results</a></li>
		
			
		</ul>
	</nav>
               
<div class="col-12">
  <h1>Reports</h1>                          
 <div style="width:100%;border-style:solid; border-radius:10px;text-align:center;border-color:#0000ff"> 
 <form action="" method="post">
Type:<select name="type" class="smalltext">
  <option value="indoor">Indoor</option>
  <option value="outdoor">Outdoor</option>
</select>
Event Name:<?php
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = "sportpro";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT * FROM event";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  echo '<select name="event" class="smalltext">';
    while($row = $result->fetch_assoc()) {
		
        echo '<option value="'.$row["event_name"].'">'.$row["event_name"].'</option>';
    }
} else {
    echo "0 results";
}

?>
<br><br>

 <input type="submit" value="GET Report">
</form>
</div>
<br><br>
<table>
<tr>
<th>Name </th>
<th>Class</th>
<th>E-mail</th>
<th>Contact</th>
</tr>
<?php
$event_name = $_POST['event'];
$type= $_POST['type'];
//echo $event_name;
//echo $type;
//$sql = "SELECT * FROM entry where event='$event_name' AND type='$type'";
$sql = "SELECT * FROM entry where event='$event_name' AND type='$type'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["username"]."</td><td>" . $row["class"]."</td><td>" . $row["email"]."</td><td>" . $row["contact"]."</td>";
echo '</tr>';  

  }
} else {
    echo "0 results";
}
$conn->close();

?>
  </table>
</div>


</div>

<footer>
  <p>Copyright 2020 by Krish. All Rights Reserved.</p>
</footer>

</body>
</html>