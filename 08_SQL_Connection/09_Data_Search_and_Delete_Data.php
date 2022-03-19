<!-- Starting PHP Codes for Database Connection -->
<?php
$host = "localhost" ;
$name = "root" ;
$pass = "" ;
$db = "office" ;

$conn = mysqli_connect($host,$name,$pass,$db) ;

if (!$conn)
{
    echo "<script>window.alert('404 Error')</script>";
}

?>
<!-- Ending PHP Codes for Database Connection -->

<!-- Starting HTML Codes For Taking Input of ID  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seach Database</title>
    <style>
body{
  padding: 150px;
  margin: 10px;
  background-image: linear-gradient(to bottom, #f22e2e, #b404cd);
  background-repeat: no-repeat ;
  background-size: 8888px 886px ;

  
}

form{
  padding: 0px;
  margin: auto;
  text-align: center;
  border: 2px solid black;
  background-color: white;
  width: 400px;
  box-shadow: -2px -3px 19px rgb(0, 0, 0);
}

.box{
  margin: 10px ;
}

#btn{
    border: 2px solid black;
}

input{
    border: none;
    border-bottom: 2px solid black;
    margin: 8px;
    padding: 8px;
    text-align: center;
}

input:focus{
    outline: none ;
}

</style>
</head>
<body>
    <form action="" method="POST">
        <div class="box">
            Write your ID : <input type="text" name="Srno" placeholder="Type Your ID" >
            <input type="submit" value="Seach" name="rsub" id="btn">
        </div>
    </form>
</body>
</html>

<!-- Ending HTML Codes For Taking Input of ID  -->






<!-- Starting the PHP Codes for Insert Data -->

<?php

if (isset($_REQUEST['rsub']))
{    
    if ( ($_REQUEST['Srno']==""))
    {
        echo "<script>window.alert('Fill all the Fields')</script>" ;       
    }

    else
    {
        $Srno = $_REQUEST['Srno'] ;
        $sql = " SELECT * FROM workers WHERE Srno='".$Srno."' " ;

        $result = mysqli_query($conn,$sql) ;

        if (mysqli_num_rows($result))
        {
            echo "<br>" ;
            echo "<br>" ;
            echo '<table border="2" style="border: 2px solid black; text-align: center; margin: auto; padding: 7px ; width: 400px ; background-color: white; box-shadow: 13px 17px 10px rgba(0,0,0,1); ">' ;
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
                width : 12px;
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
            
}

?>

<!-- Ending the PHP Codes for Insert Data -->


<!-- Starting PHP Codes to Delete Data -->
<?php

if (isset($_REQUEST['rdel']))
{
   $Srno = $_REQUEST['Srno'] ;
   $sql = "DELETE FROM workers WHERE Srno='".$Srno."' " ;
   if (mysqli_query($conn,$sql))
   {
       echo '<script>window.alert("Data Deleted Succesfully")</script>' ;
       echo '<script>location.href="09_Data_Search_and_Delete_Data.php "</script>' ;
   }

   else
   {
       echo '<script>window.alert("Unable to Delete Data")</script>'   ; 
   }
}

?>

<!-- Ending PHP Codes to Delete Data -->
