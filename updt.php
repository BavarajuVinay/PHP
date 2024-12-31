<?php
include("links.html");
echo "<hr>";

$servername="localhost"; //local server name default localhost
$username="root"; //mysql username default is root.
$password=""; //blank if no password is set for mysql.
$dbname = "lbrce";
// Create connection
$rno=$_POST["rn"];
$sname=$_POST["sn"];
$gen=$_POST["g"];
$dob=$_POST["d"];
$cs=$_POST["c"];
echo "The Given number is:".$rno;
echo "The Given number is:".$sname;
echo "The Given number is:".$gen;
echo "The Given number is:".$dob;
echo "The Given number is:".$cs;
$con = mysqli_connect($servername, $username, $password,$dbname);// Check connection
if(!$con)
{
die("Connection failed:".mysqli_connect_error());
}
$sq = "UPDATE student_info set sname='$sname', gender='$gen' where regno=$rno";
$res = mysqli_query($con,$sq);
echo "<br>";
if(!$res)
{
echo "Not Updated";
}
else
{
echo "Updated";
}
mysqli_close($con);
 ?>
