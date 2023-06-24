<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "update `crud`set id ='$id', name = '$name', email = '$email', mobile = '$mobile', password = '$password'
  where id = $id";
  $result = mysqli_query($con, $sql);

  if ($result) {
    // echo "Update  Sucesscully";
    header('location:display.php');
  } else {
    die(mysqli_error($con));
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>user Bootstrap demo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

  <div class="container my-5">
    <form method="post">

      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" 
        value="<?php echo $name;?>"
        placeholder="Enter your Name">
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" value="<?php echo $email; ?>" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>

      <div class="form-group">
        <label>Mobile</label>
        <input type="text" value="<?php echo $mobile; ?>" name="mobile" class="form-control" placeholder="Enter your Phone Number">
        <div id="PhoneHelp" class="form-text">We'll never share your Phone Number with anyone else.</div>
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" value="<?php echo $password; ?>" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      

      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>