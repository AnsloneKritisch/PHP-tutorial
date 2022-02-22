<!-- Starting PHP Codes for SQL Connection  -->

<?php

$host = "localhost" ;
$user = "root" ;
$pass = "" ;

$conn = mysqli_connect( $host , $user , $pass ) ;

if (!$conn)
{
    die("Connection Aborted") ;
}

else
{
    echo (" Connected ") ;    
}

?>
<!-- Ending PHP Codes for SQL Connection  -->

<!-- Starting PHP Codes for Creating Database -->

<?php

$sql = " CREATE DATABASE School " ;

if (mysqli_query($conn,$sql))
{
    echo '<script>window.alert("Table Created Sucessfully")</script>' ;
}

else
{
    echo'<script>window.alert("Unable To Create Table")</script>';
}

?>
