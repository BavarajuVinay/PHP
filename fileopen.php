<?php
	$fp= fopen('sample.txt', 'r');

   	/*echo fgets($fp);//single line ony

	*/

	while(!feof($fp)) 
	{  
 	 echo fgetc($fp);  
	}  
    	fclose($fp);
?>