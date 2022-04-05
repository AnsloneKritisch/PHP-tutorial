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
 $db = "office" ;

 $conn = mysqli_connect($host , $name , $pass , $db) ;


 if (!$conn)
 {
     echo "<script>window.alert('404 Error')</script>" ;     
 }

 ?> 
 
 <!-- Ending PHP codes for Creating connections with SQL  -->


<!-- Starting HTML Codes for Registration -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation Form</title>
    <style>
       
       *{
            margin : 0px ;
            padding : 0px ;

        }

        form{
            border: 2px solid black ;
            width : 294px;
            height: 228px;
            padding: 38px;
            margin: auto;
            background-color: white;
            box-shadow: 13px 17px 10px rgba(0,0,0,1);

        }

        body{
            text-align: center;
            font-family:cursive;
            padding: 58px;
            background-image: linear-gradient(to bottom, #f22e2e, #b404cd);
            background-repeat: no-repeat ;
            background-size: 8888px 886px ;
            
        }

        input{
            border: none ;
            border-bottom: 2px solid black;
            padding: 9px;
            margin: 7px;
        }

        input:focus{
            outline: none;
        }

        #box{
            border: 2px solid black;
            padding: 13px;
            margin: 25px;
            font-size: 16px;
        }

    </style>

</head>
<body>
    <form action="" method="POST">
        <div>
            Name : <input type="text" name="Name" id="" placeholder="Write Your Name">
        </div>
        <br>
        <div>
            Address : <input type="text" name="Address" id="" placeholder="Write Your Address">
        </div>
        <br>
        <div>
            Fees : <input type="text" name="Fees" id="" placeholder="Fees to be paid">
        </div>
        <br>
        <div>
            <input type="submit" value="Register Now" name="reg" id="box">
        </div>
    </form>
</body>
</html>
 

 <!-- Ending HTML Codes for Registration -->
 

 <!-- Starting PHP Code for targeting -->

 <?php
 
 if ( isset($_REQUEST['reg']))
 {
     if ( ($_REQUEST['Name']=="") || ($_REQUEST['Address']=="") || ($_REQUEST['Fees']=="") )
     {
         echo "<script>window.alert('Fill all the Fields')</script>" ;
         
     }
     else
     {
        $Name=$_REQUEST['Name'];
        $Address=$_REQUEST['Address'];
        $Fees=$_REQUEST['Fees'];

        $sql = "INSERT INTO workers(Name,Address,Fees)VALUES('$Name' , '$Address' , '$Fees')";
        if(mysqli_query($conn,$sql))
        {
            echo "<script>window.alert('Data Inserted Succesfully')</script>" ;
        }
        else
        {
            echo "<script>window.alert('Data Couldn't be Inserted')</script>" ;
        }
         
     }
 }
 
 
 
 
 ?>

 <!-- Ending PHP Code for targeting -->