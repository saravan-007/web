<?php
  $connection=mysqli_connect("localhost","root","","library",3307);
  if(!$connection)
  {
    die("Connection Failed:".mysqli_connect_error());
  }
  else
  {
    $sql="select * from students";
    $result=mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)>0)
    {
        echo "<table border='2' style='border-collapse:collapse; width:80%; margin:auto;'>";
        echo "<tr>
              <th>ID</th>
              <th>NAME</th>
              <th>PHONE</th>
              <th>ADDRESS</th>
            </tr>";
        while($row=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td><button><a href='adminEditPage.php?edit=" . $row['phone'] . "'>Edit</a></button></td>";


        }
        echo "</table>";
    }
    else
    {
        echo "<p style='text-align: center;'>No records found in the database.</p>";
    }
  }
  mysqli_close($connection);
  ?>