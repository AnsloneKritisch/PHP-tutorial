<?php

$host = "localhost" ;
$user = "root" ;
$pass = "" ;

// mysqli_connect -> This Code helps to connect SQL and PHP
// HUPD -> Shortcut use to learn ( host , user , password , database ) 
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