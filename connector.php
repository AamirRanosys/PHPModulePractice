<?php		

$server = "localhost";
$username = "root";
$password = "root@123";

$database = "Users";

$connection = mysqli_connect($server, $username, $password,$database);

if(!$connection)
{
    die("Connection not established =>".mysqli_connect_error());
}

?>
