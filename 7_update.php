<?php
$server="localhost";
$username="root";
$password="";
$database="notes";

//creating the connections
$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn)
{
    die("connection cant be made");
}
//show the table with where clause
$sql="SELECT * FROM `Notes` WHERE `sno`='2'";
$result=mysqli_query($conn,$sql);

//count the rows
$num=mysqli_num_rows($result);
echo $num . "Rows";
//Show the rows with where clause
if($num>0){
while($row=mysqli_fetch_assoc($result))
{
echo "<br>" ,$row['sno']. $row['description'] . $row['title'];
}
}

//updating the rows 
$sql="UPDATE `Notes` SET `title` = 'display' WHERE `sno` = '2'";
$result=mysqli_query($conn,$sql);

if($result)
{
    "record updated successfully";
}
else
{
    " no record updation found";
}
$aff=mysqli_affected_rows($conn);
echo "<br> no.of affected rows" . $aff;

?>