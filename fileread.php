
<?php
	$file = fopen("sample.txt","r");
	//$fileContents =fread($file,10);
	$fileContents =fread($file,filesize("Sample.txt"));
	echo $fileContents;
	fclose($file);

?>