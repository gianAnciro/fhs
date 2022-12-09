<?php 
  session_start(); 

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
        $comment = $_REQUEST['comment'];


        $sql = "INSERT INTO `comments`(`username`, `title`, `comment`)  VALUES ('$username', '$title',
            '$comment')";




if ($conn->query($sql) === TRUE) {


    echo "<script>window.location.href='forum.php?title=$title';</script>";
    exit;


} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
