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
//  else
//  {
//      echo "<script>window.alert('Database Connected')</script>" ;     
//  }

?> 

<!-- Ending PHP for Database Connection -->

<!-- Starting PHP Code for Showing Data -->
<?php

$sql = "SELECT * FROM workers" ;

$result = mysqli_query($conn,$sql) ;

// mysqli_num_rows() -> This Function helps us know no of data insertd / no of rows ...
$number_of_tables =  mysqli_num_rows($result) ;

echo '<h3 style="text-align:center;"> Total Number of tables Created =  " ' .$number_of_tables. ' " </h3>'  ;

// Creating Table in PHP
if (mysqli_num_rows($result)>0)
{
    echo '<table border="3" style="padding: 6px; margin: auto; text-align: center; width: 350px; ">';
    echo "<tr>";
    echo "<thead>";
    echo "<th>ID</th>";
    echo"<th>Name</th>";
    echo"<th>Address</th>";
    echo"<th>Fees</th>";
    echo "</thead>";
    echo"<tr>";
    echo"<tbody>";

    while($row=mysqli_fetch_assoc($result))
{
    echo"<tr>";
    echo"<td>".$row['Srno']."</td>";
    echo"<td>".$row['Name']."</td>";
    echo"<td>".$row['Address']."</td>";
    echo"<td>".$row['Fees']."</td>";
    echo"</tr>";
}
echo"</tbody>";
echo"</table>";
}
else
{
    echo"No Data Found";
}
?>

    

<!-- Ending PHP Code for Fetch Data -->