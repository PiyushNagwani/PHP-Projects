<?php

$fptr=fopen("myfiles.txt",'r');
while($a=fgets($fptr)){
    echo $a .'<br>';
    
}

?>