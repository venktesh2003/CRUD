<?php
include "connect.php";
// include "display.php";

if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $sql = "delete from crud where id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "deleted successfully";
        header("location:display.php");
    }
    else{
        echo "not deleted";
        die(mysqli_error($con));
    }
}




?>