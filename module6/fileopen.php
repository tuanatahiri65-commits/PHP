<?php


$myfile=fopen("ds.txt","w");

echo fread($myfile,filesize("ds.txt"));
fclose($myfile);





?>