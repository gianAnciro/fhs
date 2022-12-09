
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>


<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>




<center>


       <div style="width:640px; height:320px; overflow:auto;">
        <?php






include "connect.php"; 
$sender = $_SESSION['username']; 
$user = $_GET['user']; 

        echo "private chat with "; 
echo $user ;?>


<img src="https://robohash.org/<?php echo $user . "?set=set5"; ?>"
width="50" height="50">
</br></br>


<?php



$records = mysqli_query($db,"select * from chat where reciever = '$user' and sender = '$sender' union select * from chat where reciever = '$sender' and sender = '$user' ORDER BY time "); 





while($data = mysqli_fetch_array($records))
{
?>
<?php echo $data['time'] . ": "; ?>


<?php echo $data['sender'] . ": "; ?>

<?php echo $data['content'] . " "; ?>


</br>






<?php
}
?>

</center>




























<center>




<div class="footer">

<center>



		<form action="senderchat.php" method="post">

		
<input type='hidden' name='sender' value='<?php echo "$sender";?>'/> 
<input type='hidden' name='reciever' value='<?php echo "$user";?>'/> 

<input style="height:200px; width:300px;" name="content">

		<br/>
			<input type="submit" value="send">
	</form>

</center>


















</center>

</br>




</div>

</div>
<div id="circularMenu" class="circular-menu">

  <a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
<i class="fa fa-bars" aria-hidden="true"></i>
  </a>

  <menu class="items-wrapper">
    <a href="profile.php" class="menu-item fa fa-user"></a>
    <a href="write.php" class="menu-item fa fa-pencil-square-o"></a>
    <a href="stories.php" class="menu-item fa fa-list"></a>
<a href="homepage.php" class="menu-item fa fa-home"></a>
  </menu>

</div>





</body>
</html>

