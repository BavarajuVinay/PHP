<?php
include("links.html");
echo "<hr>";

$servername="localhost"; //local server name default localhost
$username="root"; //mysql username default is root.
$password=""; //blank if no password is set for mysql.
$dbname = "lbrce";
// Create connection
$rn=$_POST["regno"];
echo $rn;

$con = mysqli_connect($servername, $username, $password,$dbname);// Check connection
if(!$con)
{
die("Connection failed:".mysqli_connect_error());
}

$sq = "DELETE from student_info where regno=$rn";
$result = mysqli_query($con,$sq);
echo "<br>";
if(!$result)
{
echo "Not Deleted";
}
else
{
echo "Roll No ".$rn." Record Deleted Successfull";
}


?>