<?php
$Username = $_POST['Username'];
$Password = $_POST['Password'];

$conn = new mysqli('localhost','root','','final');
if($conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into login(Username,Password)value(?,?)");
    $stmt->bind_param("ss",$Username,$Password );
    $stmt->execute();
    echo "Why are u login";
    $stmt->close();
    $conn->lose();
}

?>