<?php
include("links.html");
$rno=$_POST['regno'];
$name=$_POST['sname'];
$gen=$_POST['gender'];
$dob=$_POST['dt'];
$crs=$_POST['course'];

$servername="localhost"; //local server name default localhost
$username="root"; //mysql username default is root.
$password=""; //blank if no password is set for mysql.
$dbname = "lbrce"; 
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);// Check connection
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql = "INSERT INTO student_info (regno,sname,gender,dob,course)VALUES ('$rno','$name','$gen','$dob','$crs')";
if (mysqli_query($conn, $sql)) 
{
  echo "<center><h1>New record created successfully </center></h1>";
} else
 {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
