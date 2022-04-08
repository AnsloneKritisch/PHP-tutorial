<!-- Starting PHP Codes For Connecting Database  -->
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
<!-- Ending PHP Codes For Connecting Database  -->



<!-- Starting  HTML Codes for taking Input  -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php
$a=[];
$b=[];
if(isset($_REQUEST['rEdit']))
{
$Srno=$_REQUEST['Srno'];
$sql="SELECT *FROM workers WHERE Srno='".$Srno."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$a=$row['Skills'];
$b=explode(',',$a);
}
?>
<form action="" method="POST">
Name:<input type="text" placeholder="Type Your Name Here" name="name"
value="<?php if(isset($row['Name'])){echo $row['Name'];} ?>"><br><br>

Address:<input type="text" placeholder="Type Your Adress Here" name="address"
value="<?php if(isset($row['Address'])){echo $row['Address'];} ?>"><br><br>

Fees:<input type="text" placeholder="Type Your Fees Here" name="fees"
value="<?php if(isset($row['Fees'])){echo $row['Fees'];} ?>"><br><br>

Gender:

Male<input type="radio" name="gen" value="Male" 
<?php if(isset($row['Gender'])&&($row['Gender']=='Male')){echo "checked";} ?>> 
Female<input type="radio" name="gen" value="Female"
<?php if(isset($row['Gender'])&&($row['Gender']=='Female')){echo "checked";} ?>>

<br><br>

Please Select Your Country :

<select name="country">
  <option value="">Select Your Country</option>
  <option value="India" <?php if(isset($row['Country'])&&($row['Country']=="India")){echo "selected";} ?>> 
  India</option> 
  <option value="Pakistan" <?php if(isset($row['Country'])&&($row['Country']=="Pakistan")){echo "selected";} ?> >
  Pakistan</option>
  <option value="Nepal" <?php if(isset($row['Country'])&&($row['Country']=="Nepal")){echo "selected";} ?>>
  Nepal</option>
</select>
<br>  
<br>  

<i>Programming Languages you know</i> <br><br>

C <input type="checkbox" name="Skills[]" value="C"
<?php if(in_array("C",$b)){echo "checked";} ?>>  <br>

C++ <input type="checkbox" name="Skills[]" value="C++"
<?php if(in_array("C++",$b)){echo "checked";} ?>> <br>

SQL <input type="checkbox" name="Skills[]" value="SQL"
<?php if(in_array("SQL",$b)){echo "checked";} ?>> <br>

PHP <input type="checkbox" name="Skills[]" value="PHP"
<?php if(in_array("PHP",$b)){echo "checked";} ?>> <br>

Java <input type="checkbox" name="Skills[]" value="Java"
<?php if(in_array("Java",$b)){echo "checked";} ?>> <br>

Javascript <input type="checkbox" name="Skills[]" value="Javascript"
<?php if(in_array("Javascript",$b)){echo "checked";} ?>> <br>

Python <input type="checkbox" name="Skills[]" value="Python
<?php if(in_array("Python",$b)){echo "checked";} ?>">

<br>
<br>

<input type="submit" value="Register" name="reg">
<input type="submit" value="Show Tables" name="Sreg">
<input type="hidden" name="Srno" value="<?php if(isset($row['Srno'])) {echo $row['Srno'];}?>">
<input type="submit" value="Update" name="rUpdate">
  </form>
</body>
</html>

<!-- Endting  HTML Codes for taking Input  -->
