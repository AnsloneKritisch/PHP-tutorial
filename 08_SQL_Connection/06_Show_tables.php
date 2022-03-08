<!--
    Objectives
    ____________

    1. We Will Create a Database Connection .
    2. Ask they want to see the table .
    3. Print all your data .

 -->

<!-- Starting PHP for Database Connection -->

<?php

$host = "localhost";
$user = "root";
$pass = "" ;
$db = "" ;

$conn = mysqli_connect($host,$user,$pass,$db) ;

if (!$conn)
{
    echo ("<script>windows.alert('Database Connected')</script>") ;
}


else
{
    echo ("<script>windows.alert('Database not Connected')</script>") ;  
}


?>

<!-- Ending PHP for Database Connection -->
