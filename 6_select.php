<?php
//connecting to the databse
$servername="localhost";
$username="root";
$password="";
$database="notes";

//creating a connection
$conn=mysqli_connect($servername,$username,$password,$database);



if(!$conn)
{
    die("connection can't be made".mysqli_connect_error);

}

$sql="SELECT * FROM `Notes`";
$result=mysqli_query($conn,$sql);

//Find the number of records
$num= mysqli_num_rows($result);
echo $num;
echo "<br>records founds in the database <br>";


    while($row=mysqli_fetch_assoc($result)){
        echo 'sno is','&nbsp'.$row['sno'].  '&nbsp Title is &nbsp' .  $row['title'].  '&nbsp Description &nbsp' .  $row['description'];
        echo "<br>";
    } 
?>