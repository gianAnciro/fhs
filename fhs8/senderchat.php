

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




        $sender = $_REQUEST['sender'];
                $reciever = $_REQUEST['reciever'];
        $content = $_REQUEST['content'];
   

        $sql = "INSERT INTO `chat`(`sender`, `reciever`, `content`, `time`)  VALUES ('$sender', '$reciever',
            '$content',NOW())";




if ($conn->query($sql) === TRUE) {


    echo "<script>window.location.href='chat.php?user=$reciever';</script>";
    exit;


} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
