<!DOCTYPE html>
<html>
<head>
  <title></title>
     <link rel="stylesheet" href="..//style.css">
</head>
<body>

<h2>Delete</h2>

<table border="2">
  <tr>
    <td>Username</td>
  </tr>

<?php

include "connect.php"; 

$records = mysqli_query($db,"select * from users"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['username']; ?></td>   
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>
