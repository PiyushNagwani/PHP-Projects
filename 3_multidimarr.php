<?php
$multidim=array(
    array(1,2,3,4,),
    array(4,5,6,8),
    array(7,9,0,1),
);
for($i=0;$i<count($multidim);$i++)
{
// echo var_dump($multidim);
for($j=0;$j<count($multidim[$i]);$j++)
{
    echo $multidim[$i][$j]."    &nbsp            ";
    
}
    echo "</br>";
}
?>