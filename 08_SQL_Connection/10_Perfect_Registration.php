
<!-- Starting PHP Codes for Database Connection -->
<?php

$host = "localhost" ;
$user = "root" ;
$pass = "" ;
$db = "office" ;

$conn = mysqli_connect($host,$user,$pass,$db) ;

if(!$conn)
{
    die("Connection Failed");
}

else
{
    echo "Connected" ;
}

?>
<!-- Ending PHP Codes for Database Connection -->

