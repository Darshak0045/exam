<?php

$con=mysqli_connect('localhost','root','','tycrud');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body> <div class="container">
<table class="table">
<button type="button" class="btn btn-success my-5"><a href="user.php">Add User</a></button>

  <thead>
    <tr>
      <th scope="col">Sr. No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql= "SELECT * FROM user";
    $result= mysqli_query($con,$sql);
    if($result) {
      //step1
      //$row = mysqli_fetch_assoc($result);
      /*echo $row['name'];*/

      //step 2
      while($row = mysqli_fetch_assoc($result))
      {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];
 
      echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td>
      
      <div class="d-grid gap-2 d-md-block">
             <a href="update.php?updateid='.$id.'"><button class="btn btn-primary" type="button">update</button></a>
             <a href="delete.php?deleteid='.$id.'"><button class="btn btn-danger" type="button">delete</button></a>
      </div>       

      
    </td>
    </tr>';

      }
      }
    ?>
      

    
    
  </tbody>
</table>
</div>
</body>
</html>