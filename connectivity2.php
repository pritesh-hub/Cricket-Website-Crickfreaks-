<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db='database';
$conn=mysqli_connect($host,$user,$pass,$db);
if(! $conn)
{
    die('Could Not connect:'.mysqli_error());
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
}

$sql = "INSERT INTO cus_info (`username`,`email`,`password`) VALUES ('$username', '$email','$password')";
if($conn->query($sql) === TRUE){
    echo "new record created successfully";
    header('location:login.php');
} else{
    echo "Error:" .$sql . "<br>" .$conn->error;
}
$conn->close();
?>