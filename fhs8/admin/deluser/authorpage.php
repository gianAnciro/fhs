


<!DOCTYPE html>
<html>
<head>
  <title></title>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../styles.css">
</head>
<body>
<center>

</br>
<?php


include "connect.php"; 

$user = $_GET['username']; 
$email = mysqli_query($db,"select email from users where username = '$user'"); 
$records = mysqli_query($db,"select * from stories where username = '$user'"); 










echo $user . "'s Profile";
echo "</br>";


?>


<?php
while($data = mysqli_fetch_array($email))
{
?>













<img src="https://joeschmoe.io/api/v1/<?php echo $data['email']; ?>"
width="200" height="200">

<?php
echo "</br></br>"
?>
<?php
echo "<a href='mailto:{$data['email']}'>"  . " message</a>"
?>

<?php
}
?>
























</center>
</br></br></br></br>




<center>
   



<?php






while($data = mysqli_fetch_array($records))
{
?>


    <?php echo "stories written by " . $user . "</br></br>"; ?>
    <?php echo $data['title']; ?>
   <a href="read.php?title=<?php echo $data['title']; ?>">read</a>

<?php
}
?>
</center>

</body>
</html>
