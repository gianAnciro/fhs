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
    <td>Title</td>
    <td>Stories</td>
  </tr>

<?php

include "connect.php"; 

$records = mysqli_query($db,"select * from stories"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['title']; ?></td>
    <td><?php echo $data['stories']; ?></td>    
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>
