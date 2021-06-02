
<?php
include '_dbconnect.php';
$showalert=FALSE;
$showerror=false;
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];

  $sqlexist="SELECT * FROM `signup` where `username`='$username'";
  $resultexist=mysqli_query($conn,$sqlexist);
  $num=mysqli_num_rows($resultexist);
  if($num>0)
  {
      $showerror="username already exists";
  }
  else{


  if($password==$cpassword)
  {
    $hash = password_hash("$password", PASSWORD_DEFAULT);
    $sql="INSERT INTO `signup` (`sno`, `username`, `password`, `date`) VALUES (NULL, '$username', '$password', current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
       $showalert=TRUE;
    }
    else{
      $showerror ="password do not match";
    }
    
    
  }
}
}

?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>signup</title>
  </head>
  <body>
  <?php require 'bootstrap/nav.php'; ?>
  <?php
  if($showalert)
  {
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey Piyush</strong> you signed up successfully,you can login now
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
  if($showerror)
  {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '. $showerror .'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }

?>
  <div class="container mt-4 text-center">
  <h3 class=>Signup to our website</h3>
  </div>
  
  <div class="container col-md-6">
  <form action="/loginsystem/signup.php" method="POST">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1">
    <div class="form-text">write the same password as above<div>
</div>
  
  <button type="submit" class="btn btn-primary"style="margin-left: 300px;">Signup</button>
</form>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>

