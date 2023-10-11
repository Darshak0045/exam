<?php
$con=mysqli_connect('localhost','root','','tycrud');

//get method is used becoz we can access the id through url
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    //i had call that id and store in $id

    //i will again pass con and query variable

    $sql="delete from user where id=$id";

    //i will again pass con and query vari.

    $result=mysqli_query($con,$sql);
    if($result){
        //echo "deleted succesfully";

        header('location:display.php');
    }

}
?>