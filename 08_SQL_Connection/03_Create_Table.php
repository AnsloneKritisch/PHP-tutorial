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

<!-- Starting PHP Codes for Creating Tables -->

<?php

$sql = " CREATE TABLE student
(
     sl_no int(10) AUTO_INCREMENT primary key ,
     Name varchar(30) , 
     Address varchar
) " ;

?>

<!-- Ending PHP Codes for SQL Connection -->
