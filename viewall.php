<?php
include("links.html");
echo "<h1 align='center'>Students Infromation</h1>";
echo "<hr>";
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
$sql = "SELECT * FROM student_info";
$result = mysqli_query($conn, $sql);
 ?>

<table align="center" border="5">  
<tr>
<th>Reg.No</th>
<th>Student Name</th>
<th>Gender</th>
<th>DOB</th>
<th>course</th>

</tr>
<?php
  while($row = mysqli_fetch_assoc($result)) 
{
?>

<tr>
<td><?php echo $row["regno"]?> </td>

<td><?php echo $row["sname"]?> </td>

<td><?php echo $row["gender"]?> </td>

<td><?php echo $row["dob"]?> </td>

<td><?php echo $row["course"]?> </td>


</tr>
<?php  
  }
?>
</table>

<?php  
mysqli_close($conn);
?>







