<?php

include 'connect.php';
$id=$_GET['updateid'];

// update e click korar por sobgulo existing data show korano ldap_get_attribute
// tai sobgulo datar jonno code kora lagbe
$sql = "Select * from `crud` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud` set id=$id, name='$name',
    email='$email', mobile='$mobile', password='$password' where id=$id";

    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Updated successfully";
        header('location:admin.php');
    } else {
        die(mysqli_error($con));
    }
}

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

    <title>CRUD OPERATIONS!</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" 
                class="form-control" 
                name="name" placeholder="Enter name" 
                autocomplete="off" 
                value="<?php echo $name;?>">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off" value=<?php echo $email;?>>
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Enter your number" autocomplete="off" value=<?php echo $mobile;?>>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" placeholder="Enter your password" autocomplete="off" value=<?php echo $password;?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>


</body>

</html>