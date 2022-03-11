<!--
    Objectives
    ____________

    1. Database Connection
    2. Take input from the form
    3. Print all your data 
    4. Delete Data 

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
            /* background-repeat: no-repeat ; */
            background-size: 88888px 1806px ;
            
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
        
        #box1{
            float: left;
            border: 2px solid black;
            font-size: 16px;
            padding: 13px;
            margin: 0px;
            width: 40%;
            position: relative;
            top: 90px;
            box-shadow: 5px 11px 6px rgba(0,0,0,1);

        }
        
        #box2{
            float: right;
            border: 2px solid black;
            font-size: 16px;
            padding: 13px;
            margin: 0px;
            width: 40%;
            position: relative;
            top: 90px;
            box-shadow: 5px 11px 6px rgba(0,0,0,1);

        }
        #btn{
            border: 2px solid black;
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
            <input type="submit" value="Register Now" name="reg" id="box1">
        </div>
        <div>
            <input type="submit" value="Show Tables" name="treg" id="box2">
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

 <!-- Starting PHP Codes for Creating Table -->
 
 <?php

 $sql = "SELECT * FROM workers" ;
 $result = mysqli_query($conn,$sql) ;

 if (isset($_REQUEST['treg']))
 {
     
    if (mysqli_num_rows($result)>0)
    {
        echo "<br>" ;
        echo "<br>" ;
        echo '<table border="2" style="border: 2px solid black; text-align: center; margin: auto; padding: 0px ; width: 400px ; background-color: white; box-shadow: 13px 17px 10px rgba(0,0,0,1); position: relative;top: 135px;">' ;
        echo "<caption><h2>The Requird Details Are Here !<h2> </caption>";
        echo "<tr>" ;
        echo "<thead>" ;
        echo "<th>Name</th>" ;
        echo "<th>Address</th>" ;
        echo "<th>Fees</th>" ;
        echo "<th>Delete</th>" ;
        echo "</thead>" ;
        echo "</tr>" ;
        echo "<tbody>" ;
        while ($row=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['Address']."</td>";
            echo "<td>".$row['Fees']."</td>";
            echo '<td> <form action="" method="POST"
            style="
            padding: 0px;
            margin: 0px;
            border: 2px solid white ;
            width : 120px;
            height: 50px;
            background-color: white;
            box-shadow: 0px 0px 0px rgba(0,0,0,0);
            ">
            <input type="hidden" name="Srno" value='.$row["Srno"].'>
            <input type="submit" value="Delete" name="rdel" id="btn">
            </form>
            </td>';

            echo "</tr>";
        }
        
        echo "</tbody>" ;
        echo '</table>' ;
    }
    else
    {
        echo '<script>window.alert("ID Not Found")</script>';
        
    }
     
 }
 
 ?>
 
 <!-- Ending PHP Codes for Creating Table -->






 <!-- Starting PHP Codes to Delete Data -->
 <?php

 if (isset($_REQUEST['rdel']))
 {
    $Srno = $_REQUEST['Srno'] ;
    $sql = "DELETE FROM workers WHERE Srno='".$Srno."' " ;
    if (mysqli_query($conn,$sql))
    {
        echo '<script>window.alert("Data Deleted Succesfully")</script>' ;
        echo '<script>location.href="08_Delete_Data_From_Table.php"</script>' ;
    }

    else
    {
        echo '<script>window.alert("Unable to Delete Data")</script>'   ; 
    }
 }

 ?>

 <!-- Ending PHP Codes to Delete Data -->
 