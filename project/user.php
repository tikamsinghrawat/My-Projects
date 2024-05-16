<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into user(name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        
        //echo "Data Inserted Successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>CRUD Project</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="POST">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="text" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label >Mobile</label>
    <input type="text" class="form-control" placeholder="Enter Your Mobile No" name="mobile" autocomplete="off">
  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="text" class="form-control" placeholder="Enter Your Password" name="password" autocomplete="off">
  </div>
    
  
    <button type= "submit1" class="btn btn-primary" name="submit" >Submit</button>
</form>
    </div>
  </body>

</html>