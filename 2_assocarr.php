<?php
$assoc=array('Piyush'=>'Galta Gate',
            'Abhishek'=>'Jamdoli',
            'Aniket'=>'Keshav vidhyapeeth',
            'Deepak'=>'Jamdoli');

//another way to use associative array
// $assoc['Piyush']='Galta gate';
// $assoc['Abhishek']='Jamdoli';
// $assoc['Aniket']='Keshav vidhyapeeth';
// $assoc['Deepak']='Jamdoli';

foreach($assoc as $key=>$value)
{
    echo $key."&nbsp live in &nbsp". $value;
    echo "<br>";
}
?>