
<!-- PHP Codes for connecting Database -->

<?php

$host = "localhost" ;
$user = "root" ;
$pass = "" ;
$db = "office" ;

$conn = mysqli_connect($host , $user ,$pass ,$db) ;

if (!$conn)
{
    die("Connection Failed") ;
}

?>