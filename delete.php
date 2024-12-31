<?php
include("links.html");
$rno=$_POST["regno"];
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
$sql = "SELECT * FROM student_info where regno=$rno";
$result = mysqli_query($conn,$sql);
 ?>
<form name="update_form" action="delete1.php" method="post">
<h1 align="center">Students Infromation</h1>
<table align="center" border="5">  
<?php
  while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
<th>Reg.No</th>
<td><input type="text" name="regno" value=<?php echo $row["regno"] ?> readonly/></td>
</tr>

<tr>
<th>Student Name</th>
<td><input type="text" name="sn" value=<?php echo $row["sname"]?> /></td>
</tr>

<tr>
<th>Gender</th>
<td><input type="text" name="g" value=<?php echo $row["gender"]?> /></td>
</tr>

<tr>
<th>DOB</th>
<td><input type="text" name="d" value=<?php echo $row["dob"]?> /></td>
</tr>

<tr>
<th>course</th>
<td><input type="text" name="c" value=<?php echo $row["course"]?> /></td>
</tr>

<tr>
<td colspan="2"><input type="submit" value="Delete" align="center"/></td>
</tr>
</table>
</form>
<?php  
}

mysqli_close($conn);

?>