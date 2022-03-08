<!--
    Objectives
    ____________

    1. We Will Create a Database Connection .
    2. Ask they want to see the table .
    3. Print all your data .

 -->

<!-- Starting PHP for Database Connection -->

<?php
 
 $host = "localhost" ;
 $name = "root" ;
 $pass = "" ;
 $db = "office" ;

 $conn = mysqli_connect($host , $name , $pass , $db) ;


 if (!$conn)
 {
     echo "<script>window.alert('404 Error')</script>" ;     
 }
 else
 {
     echo "<script>window.alert('Database Connected')</script>" ;     
 }

?> 

<!-- Ending PHP for Database Connection -->
