<?php

include("links.html");
echo "<h1 align='center'>Students Infromation</h1>";
echo "<hr>";

$servername="localhost"; //local server name default localhost
$username="root"; //mysql username default is root.
$password=""; //blank if no password is set for mysql.
$dbname = "lbrce"; 
// Create connection
$con = mysqli_connect($servername, $username, $password,$dbname);// Check connection
if(!$con)
{
die("Connection failed:".mysqli_connect_error());
}
$sq = "SELECT * FROM student_info";
$res = mysqli_query($con, $sq);
 ?>

<form name="update_form" action="bothop.php" method="post">

<table align="center" border="5"> 
<tr>
<th>Reg.No</th>
<th>Student Name</th>
<th>Gender</th>
<th>DOB</th>
<th>course</th>
<th>Operation</th>
</tr> 
<?php
  while($row = mysqli_fetch_assoc($res))
{
?>

	<tr>
		<td><input type="text" name="rn" value=<?php echo $row["regno"]?>></td>
		<td><input type="text" name="sn" value=<?php echo $row["sname"]?>></td>
		<td><input type="text" name="g" value=<?php echo $row["gender"]?>></td>
		<td><input type="text" name="d" value=<?php echo $row["dob"]?> ></td>
		<td><input type="text" name="c" value=<?php echo $row["course"]?>></td>
		<td><button name="btn" type="submit" value=<?php echo $row["regno"]?>-update>Update</button>
		    <button name="btn" type="submit" value=<?php echo $row["regno"]?>-delete>Delete</button>
		</td>
	</tr>
<?php
} 
?>

</table>
</form> 

<?php
mysqli_close($con);
?>
