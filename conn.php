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
echo'Connect succesfully';
// mysqli_close($conn);
?>