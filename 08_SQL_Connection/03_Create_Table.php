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
     Address varchar(40) ,
     Fees dec(10,2)

) " ;

if (mysqli_query($conn,$sql))
{
    echo ("<br> Table Created Sucessfully") ;   
}

else
{
    echo ("<br> No Table Created <br> 404 Error ") ;   
}

?>

<!-- Ending PHP Codes for SQL Connection -->
