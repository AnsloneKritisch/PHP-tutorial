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
// else
// {
//     echo "<script>window.alert('Database Connected')</script>";

// }
?>
<!-- Ending PHP Codes for Database Connection -->




<!-- Starting HTML Codes For Seach -->
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
  padding: 10px;
  margin: auto;
  text-align: center;
  border: 2px solid black;
  background-color: white;
  width: 400px;
  box-shadow: 13px 17px 10px rgba(0,0,0,1);
}

.box{
  margin: 10px ;
}


</style>
</head>
<body>
    <form action="" method="POST">
        <div class="box">
            Write your ID : <input type="text" name="Srno" placeholder="Type Your ID" >
            <input type="submit" value="Seach" name="rsub">
        </div>
    </form>
</body>
</html>
<!-- Ending HTML Codes For Seach -->


<!-- Stating PHP Codes for Showing the Result -->

<?php

if (isset($_REQUEST['rsub']))
{
    if ($_REQUEST['Srno']=="")
    {
        echo '<script>window.alert("Please Fill all the Fields")</script>';
    }

    else
    {
        $Srno = $_REQUEST['Srno'] ;
        $sql = " SELECT * FROM workers WHERE Srno='".$Srno."' " ;

        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result)>0)
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
            echo "</thead>" ;
            echo "</tr>" ;
            echo "<tbody>" ;
            while ($row=mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$row['Name']."</td>";
                echo "<td>".$row['Address']."</td>";
                echo "<td>".$row['Fees']."</td>";
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

<!-- Ending PHP Codes for Showing the Result -->