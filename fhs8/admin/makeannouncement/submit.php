

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


        $title = $_REQUEST['title'];
 $date = date("Y/m/d");
        $announcement = $_REQUEST['announcement'];
       

        $sql = "INSERT INTO `announcement`(`title`, `date` , `announcement`)  VALUES ('$title', '$date',
            '$announcement')";




if ($conn->query($sql) === TRUE) {

$message = "finish";
echo "<script type='text/javascript'>alert('$message');</script>";
    header("location:write.php"); 
    exit;

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
