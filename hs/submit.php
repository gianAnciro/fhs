

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








<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


        $username = $_SESSION['username'];
        $title = $_REQUEST['title'];
        $stories = $_REQUEST['stories'];


        $sql = "INSERT INTO `stories`(`username`, `title`, `stories`)  VALUES ('$username', '$title',
            '$stories')";




if ($conn->query($sql) === TRUE) {

$message = "Your Story Was Submitted!";
echo "<script type='text/javascript'>alert('$message');</script>";


} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
