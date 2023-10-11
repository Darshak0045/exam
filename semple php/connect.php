<?php
    $con= new mysqli('localhost','root','','tycrud');
    if($con){
        echo"connected";
    }else{
        die(mysql_error($con));
    }
    

?>