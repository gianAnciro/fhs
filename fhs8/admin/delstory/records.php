<!DOCTYPE html>
<html>
<head>


<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../styles.css">
</head>
<body>

<center>
  <h1 class="horror-text">delete a story</h1>
</center>

<center>
       <div style="width:640px; height:320px; overflow:auto;">
<table border="2">
  <tr>
    <td>author</td>
    <td>Title</td>

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
   
    <td><a href="read.php?title=<?php echo $data['title']; ?>"> read</a></td>

 <td><a href="delete.php?title=<?php echo $data['title']; ?>" onclick="return  confirm('do you want to delete this story?')">delete </a></td>
  </tr>	
<?php
}
?>
</table>
</div>
</center>

</body>
</html>
