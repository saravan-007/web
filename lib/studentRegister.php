<?php
  $connection=mysqli_connect("localhost","root","","library",3307);
  if(!$connection)
  {
    die("Connection Failed:".mysqli_connect_error());
  }
  if(isset($_POST["submit"]))
  {
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $sql="insert into students(name,phone,address)values('$name','$phone','$address')";
    if(mysqli_query($connection,$sql))
    {
        echo '<script>location.replace("index.php")</script>';
    }
    else
    {
       echo "Connection Failed:".mysqli_error($connection);
    }
  }
  mysqli_close($connection);
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="register-container">
        <h1>Student Registration</h1>
        <form action="studentRegister.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" required>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required>
            <input type="submit" value="Submit" name="submit" id="submit" required>
        </form>
        <p>Already have an account<a href="studentLogin.php">Login here</a></p>
    </div>
</body>
</html>