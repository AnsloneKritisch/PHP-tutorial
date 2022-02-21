<?php

$host = "localhost" ;
$user = "root" ;
$pass = "" ;

$conn = mysqli_connect($host , $user , $pass ) ;

if ($conn)
{
    echo "Connected" ;
}

else
{
    echo " 404 Server Not Found " ;
}

?>