<?php

$fptr=fopen("myfiles.txt",'r');
while($a=fgetc($fptr)){
    echo $a;
}

//if i want to read the file until fullstop'.' 
//has arrived then i run the condition inside while loop
//if($a=='0')
//{
  //  break;
//}
?>