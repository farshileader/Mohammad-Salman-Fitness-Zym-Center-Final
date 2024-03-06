<?php include('header.php'); ?>
<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="INSERT INTO `crud` (name,email,mobile,password)
    values('$name','$email','$mobile','$password')";

    $result=mysqli_query($con,$sql);
    if($result){
        // echo "inserted successfully";
        header('location:welcome.php');
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

    <title>CRUD OPERATIONS!</title>
</head>

<body>
    
    <div class="container my-5">
        <h1 class="text-center mb-4">Join Our Gym by Filling Up the Form</h1>
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Enter your number" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" placeholder="Enter your password" autocomplete="off">
            </div>
           
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>

<?php include('footer.php'); ?>
