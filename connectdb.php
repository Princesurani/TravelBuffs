<?php 

//connecting db
$servername = "localhost";
$username = "root";
$password = "";
$database = "travelbuffs";

$dbconn = mysqli_connect($servername , $username , $password , $database);

if(!$dbconn)
{
    die("failed ".mysqli_connect_error());
    // echo "Connection not done";
}
else 
    echo "done";
?>