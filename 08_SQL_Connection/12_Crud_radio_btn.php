<!--Starting PHP Codes to Connect Database -->

<?php
$host="localhost";
$user="root";
$pass="";
$db="office";

$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
    die("Connection Failed");
}
?>

<!--Starting PHP Codes to Connect Database -->


<!-- Starting HTML Codes to Data Entry -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome</title>
</head>
<body>
    
    <?php
    
    if(isset($_REQUEST['edit']))
    {
        $srno=$_REQUEST['srno'];
        $sql="SELECT *FROM radio_btn WHERE srno='".$srno."'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
    }
    
    ?>
    
    <form action="" method="POST">

        Name:<input type="text" placeholder="Type Your Name Here" name="name" 
        value="<?php if(isset($row['name'])){echo $row['name'];} ?>">
        <br><br>

        Gender:
        Male<input type="radio" name="gender" value="Male" 
        <?php if(isset($row['gender'])&&($row['gender']=='Male')){echo "checked";} ?>> 
        Female<input type="radio" name="gender" value="Female"
        <?php if(isset($row['gender'])&&($row['gender']=='Female')){echo "checked";} ?>>
        <br><br>

        Please Select Your Country :
        <select name="country">
            <option value="">Select Your Country</option>
            <option value="India" <?php if(isset($row['country'])&&($row['country']=="India")){echo "selected";} ?>> 
            India</option>
            <option value="Pakistan" <?php if(isset($row['country'])&&($row['country']=="Pakistan")){echo "selected";} ?> >
            Pakistan</option>
            <option value="Nepal" <?php if(isset($row['country'])&&($row['country']=="Nepal")){echo "selected";} ?>>
            Nepal</option>
            
        </select>
        <br><br>

        <input type="submit" value="Register" name="reg">
        <input type="submit" value="Show Tables" name="show">
        <input type="hidden" name="srno" value="<?php if(isset($row['srno'])) {echo $row['srno'];}?>">
        <input type="submit" value="Update" name="update">
    
    </form>
</body>
</html>

<!-- Ending HTML Codes to Data Entry -->

<!-- Starting PHP Codes to insert data -->

<?php

if(isset($_REQUEST['reg']))
{
    if(($_REQUEST['name']=="")||empty($_REQUEST['gender'])|| empty($_REQUEST['country']))
  {
    echo'<script>window.alert("Please Fill all The Fields")</script>';
  }
  
  else
  {
    $name=$_REQUEST['name'];
    $gender=$_REQUEST['gender'];
    $country=$_REQUEST['country'];
    $sql="INSERT INTO radio_btn(name,gender,country)VALUES('$name','$gender','$country')";
    
    if(mysqli_query($conn,$sql))
    {
        echo'<script>window.alert("Registration Succesfully")</script>';
    }

    else
    {
        echo'<script>window.alert("Error")</script>';
    }
  }

}
?>

<!-- Starting PHP Codes to insert data -->


<!--Startring PHP Codes to fetch Data -->

<?php

echo"<br><br>";

if (isset($_REQUEST['show'])) 
{
    $sql="SELECT * FROM  radio_btn";
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0)
    {
        echo'<table border="2">';
        echo"<tr>";
        echo"<thead>";
        echo"<th>Name</th>";
        echo"<th>gender</th>";
        echo"<th>country</th>";
        echo"<th>Delete</th>";
        echo"<th>Edit</th>";
        echo"</thead>";
        echo"</tr>";
        echo"<tbody>";
        
        while($row=mysqli_fetch_assoc($result))
        {
            echo'<tr>';
            echo"<td>".$row['name']."</td>";
            echo"<td>".$row['gender']."</td>";
            echo"<td>".$row['country']."</td>";
            echo '<td> <form action="" method="POST" >
            <input type="hidden" name="srno" value='.$row["srno"].'>
            <input type="submit" value="Delete" name="del" id="btn">
            </form>
            </td>';
            echo '<td> <form action="" method="POST" >
            <input type="hidden" name="srno" value='.$row["srno"].'>
            <input type="submit" value="Edit" name="edit" id="btn">
            </form>
            </td>';
            
            echo "</tr>";
        }
        echo "</tbody>" ;
        echo '</table>' ;
    }

}
?>



<!--------- Starting PHP Codes to Delete Data ------------------->
<?php

if(isset($_REQUEST['del']))
{
  $srno = $_REQUEST['srno'] ;
  $sql = "DELETE FROM radio_btn WHERE srno='".$srno."' " ;
  
  if (mysqli_query($conn,$sql))
  {
    echo '<script>window.alert("Data Deleted Succesfully")</script>' ;
    echo '<script>location.href="12_Crud_radio_btn.php"</script>' ;
  }
  
  else
  {
    echo '<script>window.alert("Unable to Delete Data")</script>'   ; 
  }

}

?>
<!---------Ending PHP Codes to Delete Data----------------------->


<!---------Ending PHP Codes to Update Data----------------------->
<?php

if(isset($_REQUEST['update']))
{
if(($_REQUEST['name']=="")||empty($_REQUEST['gender'])|| empty($_REQUEST['country']))
  {
    echo'<script>window.alert("Please Fill all The Fields")</script>';
  }
  
  else
  {
    $srno=$_REQUEST['srno'];
    $name=$_REQUEST['name'];
    $gender=$_REQUEST['gender'];
    $country=$_REQUEST['country'];
    $sql="UPDATE radio_btn SET Name='$name', gender='$gender' , country='$country'
    WHERE srno ='".$srno."'";
    if(mysqli_query($conn,$sql))
    {
      echo'<script>window.alert("Data Updated Succesfully")</script>';
      echo'<script>location.href="12_Crud_radio_btn.php"</script>';
    }
    
    else
    {
      echo'<script>window.alert("Data Updated Succesfully")</script>';
    }
  }
}

?>
<!---------Ending PHP Codes to Update Data----------------------->
 