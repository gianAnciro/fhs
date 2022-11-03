
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
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Indie Flower' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    </head>
    <body>

  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>






<center>
  <h1 class="horror-text">FHS Archive</h1>

</center>







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





        <script src="" async defer></script>
    </body>
</html>

