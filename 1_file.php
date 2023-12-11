<?php

$f=fopen("file_1.txt","w");
$sen="hey how are u i am fine";
fwrite($f,$sen);
fclose($f);

$f=fopen("file_1.txt","a");
$sen="hey how are u i am fine yo";
fwrite($f,$sen);
fclose($f);


$f=fopen("file.txt","r");
$a=fread($f);

?>
