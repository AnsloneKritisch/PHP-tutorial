<!-- Starting PHP Codes for SQL Connection -->

<?php

$host = "localhost" ;
$name = "root" ;
$pass = "" ;
$db = "school" ;


$conn = mysqli_connect($host , $name , $pass , $db) ;

if (!$conn)
{
    die("Connection Aborted") ;
}

else
{
    echo ("Connected") ;
}

?>





<!-- Ending PHP Codes for SQL Connection -->
