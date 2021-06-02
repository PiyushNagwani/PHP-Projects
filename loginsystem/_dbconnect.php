<?php

$servername="localhost";
$username="root";
$password="";
$database="userlogin";

//creating a connection
$conn=mysqli_connect($servername,$username,$password,$database);



if(!$conn)
{
    die("connection can't be made".mysqli_connect_error);

}
// else{
//     echo "connection was successful";
// }

?>