<?php
$server='localhost';
$username='root';
$password="";
$database='notes';

//creating the connection
$conn=mysqli_connect($server,$username,$password,$database);
//checking the connection
if(!$conn)
{
    die("can't be created");
}

$sql="DELETE FROM `deletion` WHERE `sno`='1'";
$result=mysqli_query($conn,$sql);

if($result)
{
    echo "1 row deleted";
}
else{
    echo"not deleted";
}
?>