<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db='database';
$conn = mysqli_connect($host,$user, $pass, $db);
if(! $conn)
{
    die('could not connect:'. mysqli_error());
}

// include(conn.php);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM cus_info WHERE username = '$username' AND password ='$password'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        echo "Login successful!";
        header('location: website2\index.html');

    }
    else{
        echo "Invalid username or password";
        header('location: login.php');
    }
}

// echo'connected successfully';
// mysqli_close($conn);
?>
