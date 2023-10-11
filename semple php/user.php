<?php

$con=mysqli_connect('localhost','root','','tycrud');

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

 //insert query
 $sql="INSERT INTO user(name,email,mobile,password)
      VALUES ('$name','$email','$mobile','$password')";

 // execution
 $result=mysqli_query($con,$sql);

 if($result){
  //echo "DATA INSERTED";
    header('location:display.php');
 }
 else{
  die(mysqli_error($con));
 }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container my-3">
    <form method="POST">
  <div class="mb-3">
    <label>name</label>
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    <label>email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    <label>mobile number</label>
    <input type="mobile" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
    <label>password</label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
    
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

  </body>
</html>