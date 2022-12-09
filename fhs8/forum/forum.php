
<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>




<center>
       <div style="width:640px; height:320px; overflow:auto;">

<?php




$title = $_GET['title']; 
echo "comment section for ";
echo $title . "</br>" . "</br>";



include "connect.php"; 


$records = mysqli_query($db,"select * from comments where title = '$title' "); 

while($data = mysqli_fetch_array($records))
{
?>


<?php echo $data['username'] . ": "; ?>
<?php echo $data['comment']; ?>
</br>



<?php
}
?>

</center>
































<center>




<div class="footer">

<center>



		<form action="comment.php" method="post">

		
<input type='hidden' name='title' value='<?php echo "$title";?>'/> 

<textarea name="comment">

</textarea>
		<br/>
			<input type="submit" value="comment">
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
    <a href="../profile.php" class="menu-item fa fa-user"></a>
    <a href="../write.php" class="menu-item fa fa-pencil-square-o"></a>
    <a href="../stories.php" class="menu-item fa fa-list"></a>
<a href="../homepage.php" class="menu-item fa fa-home"></a>
  </menu>

</div>





</body>
</html>

