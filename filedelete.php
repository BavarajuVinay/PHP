///PHP Delete File Example
<?php      
$status=unlink("dataFile.txt");    
if($status)
{  
echo "File deleted successfully";    
}
else
{  
echo "Opps Your File Not Delete !";    
}  
?>  