<?php

$fptr=fopen("myfiles2.txt",'w');
$a=fwrite($fptr,"hey done");
echo $a;


$fptr1=fopen("myfiles2.txt",'a');
$b=fwrite($fptr1,"what is your position");
$b;
?>