<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories</title>

        <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<center>
  <h1 class="horror-text">Stories</h1>
</center>
     </br> 

<?php
    //storing database details in variables.
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    //creating connection to database
    $con = mysqli_connect($hostname, $username, $password, $dbname);
    //checking if connection is working or not
    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    else 
   

    $sql = "SELECT username, title, stories FROM stories";

    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
       echo '<table> <tr> <th> username </th> <th> title </th> </tr>';
       while($row = mysqli_fetch_assoc($result)){

           echo '<tr >
           <td>' . $row["username"] . '</td>
           <td> ' . $row["title"] . '</td>
  </tr>';
       }
       echo '</table>';
    }
    else
    {
        echo "0 results";
    }
    // closing connection
    mysqli_close($con);

?>








<div id="circularMenu" class="circular-menu">

  <a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
<i class="fa fa-bars" aria-hidden="true"></i>
  </a>

  <menu class="items-wrapper">
    <a href="profile.php" class="menu-item fa fa-user"></a>
    <a href="write.php" class="menu-item fa fa-pencil-square-o"></a>
    <a href="stories.php" class="menu-item fa fa-list"></a>
<a href="index.php" class="menu-item fa fa-home"></a>
  </menu>

</div>


</body>
</html>
