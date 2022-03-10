<!-- Starting PHP Codes for Connecting Database -->

<?php

$host = "localhost" ;
$user = "root" ;
$pass = "" ;
$db = "office" ;

$conn = mysqli_connect($host ,  $user , $pass , $db) ;

if(!$conn)
{
    die("<script>window.alert('404 Error')</script>") ;
}
else
{
    echo("COnnected");
}

?>

<!-- Ending PHP Codes for Connecting Database -->
