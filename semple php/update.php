<?php
$con=mysqli_connect('localhost','root','','tycrud');
$id=$_GET['updateid'];
if(isset($_POST['update'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];
  
  //upadet
  $sql=("UPDATE user SET name='$name', email='$email' , mobile='$mobile' ,password='$password' where id='$id' " );

  //execute
  $result=mysqli_query($con,$sql);

  //we will check
  if($result){
    //echo "data updated";
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}

  //dispaly data step2
  $sql="select * from user where id=$id";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
     $id = $row['id'];
     $name = $row['name'];
     $email = $row['email'];
     $mobile = $row['mobile'];
     $password = $row['password'];


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
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo "$name";?>>

    <label>email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo "$email";?>>

    <label>mobile number</label>
    <input type="mobile" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo "$mobile";?>>
    
    <label>password</label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo "$password";?>>
  </div>
 
    
  
  <button type="submit" name="update" value="update" class="btn btn-warning">update</button>
</form>
</div>

  </body>
</html>