<?php




$myfile=fopen("ds.txt","r");

echo fread($myfile,filesize("ds.txt"));
fclose($myfile);


?>