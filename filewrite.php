<?php  
$fp = fopen("cse.txt", "a");//opens file in write-only mode  
fwrite($fp, "Welcome to SSS LAb");  
fclose($fp);  
echo "File Appended successfully";  
?>  