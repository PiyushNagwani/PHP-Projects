<?php

$fptr = fopen('myfiles.txt','r');


if(!$fptr){
    echo "unable to open a file name,please enter a file name";
}
$content=fread($fptr,filesize('myfiles.txt'));
echo $content;
 
