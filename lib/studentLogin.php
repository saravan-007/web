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
    $sql="select * from students where name='$name' and phone='$phone'";
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
    <title>Student Login</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="login-container">
        <h1>Student Login</h1>
        <form action="studentLogin.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone">
            <input type="submit" value="submit" name="submit" id="submit">
        </form>
        <p>Don't have an account <a href="studentRegister.php">Signup here</a></p>
    </div>
</body>
</html>