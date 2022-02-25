<!--
    Objectives
    ____________

    1. We Will Create a Database
    2. Create a Table
    3. Take input from the form
    4. Print all your data 

 -->


 
 
 <!-- Starting PHP codes for Creating connections with SQL  -->

 <?php
 
 $host = "localhost" ;
 $name = "root" ;
 $pass = "" ;

 $conn = mysqli_connect($host , $name , $pass) ;

//  This debugging to check the connection has been established successfully

 if (!$conn)
 {
     echo "<script>window.alert('404 Error')</script>" ;
     
 }

 ?>

 <!-- Ending PHP codes for Creating connections with SQL  -->




 <!-- Starting PHP codes for Creating Database -->
 
 <?php
 
 $sql = "CREATE DATABASE office " ;

 if (if(mysqli_query($conn,$sql)))
 {
     echo("Database Created Sucessfully")
     
 }

 else
 {
     echo ("<script>windows.alert(' 404 Error </script>")
     
 }


 ?>
 
 <!-- Ending PHP codes for Creating Database -->
 
