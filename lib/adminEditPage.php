<?php
$connection = mysqli_connect("localhost", "root", "", "library", 3307);

// Check if the 'edit' parameter is passed in the URL
if (isset($_GET['edit'])) {
    $edit = $_GET['edit'];
    $sql = "SELECT * FROM students WHERE phone = '$edit'";
    $run = mysqli_query($connection, $sql);

    // Check if a record is found
    if (mysqli_num_rows($run) > 0) {
        while ($row = mysqli_fetch_array($run)) {
            $uid = $row['id'];
            $name = $row['name'];
            $address = $row['address'];
            $phone = $row['phone'];
        }
    } else {
        echo "No record found for the provided phone number.";
        exit;
    }
} else {
    echo "Invalid access. No 'edit' parameter provided.";
    exit;
}

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $sql = "UPDATE students SET name='$name', address='$address', phone='$phone' WHERE phone='$edit'";

    if (mysqli_query($connection, $sql)) {
        echo '<script>location.replace("index.php")</script>';
    } else {
        echo "Something went wrong: " . $connection->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin edit page</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="register-container">
        <h1>Admin Edit</h1>
        <form action="adminEditPage.php">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo $name ?>">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" value="<?php echo $phone ?>">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="<?php echo $address ?>">
            <input type="submit" name="submit" value="submit" id="submit">
        </form>
    </div>
</body>
</html>