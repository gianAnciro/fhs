<!DOCTYPE html>
<html>
<head>
  <title></title>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<center>
  <h1 class="horror-text">reported users</h1>

</center>
</br>

<center>
    

<?php

include "../connect.php"; 

$records = mysqli_query($db,"select * from users where reports >= 1  ORDER BY reports DESC"); 

while($data = mysqli_fetch_array($records))
{
?>
 
<a href="../authorpage.php?username=<?php echo $data['username']; ?>"> <?php echo $data['username']; ?>  </a><?php echo "reports " . $data['reports']; ?>

</br></br>

<?php
}
?>

</center>













</body>
</html>
