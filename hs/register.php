<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>




<center>
  <h1 class="horror-text">Register</h1>






	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>

  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
</br></br>

  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
</br></br>

  	  <label>Password</label>
  	  <input type="password" name="password_1">
</br></br>


  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
</br></br>

  	  <button type="submit" class="btn" name="reg_user">Register</button>
</br></br>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>


</center>

</body>
</html>
