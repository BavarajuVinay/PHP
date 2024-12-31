<?php  
$target_dir = "C:/sss/";  
$target_path = $target_dir.basename( $_FILES["fileUpload"]["name"]);   
  
if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],$target_path)) 
{  
    echo "File uploaded successfully!";  
} 
else
{  
    echo "Sorry, file not uploaded, please try again!";  
}  
?>  