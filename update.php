<?php
include "connect.php";
$id = $_GET['updateid'];
$sql = "select * from crud where id  = $id";
$result = mysqli_query($con , $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password= $_POST['password'];
  
    $sql = "update crud set id='$id',name = '$name' , email ='$email', mobile ='$mobile' ,password = '$password'";
    $result = mysqli_query($con,$sql);
     if($result){
    // echo "data is inserted successfully";
    // header("location:display.php");//header for redirecting
    // echo "updated successfukky";
    header("location:display.php");
}
    else{
   die( mysqli_error($con));
}




}





?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class = "container">
    <form method = "POST">
  <div class="mb-3">
    <label >name</label>
    <input type="text" class="form-control" name = "name" value = <?php 
    echo $name ?>>
   </div>
   <div class="mb-3">
    <label >email</label>
    <input type="email" class="form-control" autocomplete="off" name = "email" value = <?php 
    echo $email ?>>
   </div>

   <div class="mb-3">
    <label >mobile</label>
    <input type="text" class="form-control" name= "mobile" value = <?php 
    echo $mobile ?>>
   </div>

   <div class="mb-3">
    <label >password</label>
    <input type="text" class="form-control" name = "password" value = <?php 
    echo $password ?>>
   </div>
 
  <button type="submit" class="btn btn-primary" name = "submit">update</button>
</form>
    </div>
   
  </body>
</html>