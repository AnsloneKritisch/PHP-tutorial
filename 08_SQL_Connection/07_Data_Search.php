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
else
{
    echo "<script>window.alert('Database Connected')</script>";

}
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
  
}

form{
  padding: 10px;
  margin: auto;
  text-align: center;
  border: 2px solid black;
  background-color: white;
  width: 400px;
}

.box{
  margin: 10px ;
}


</style>
</head>
<body>
    <form action="#" method="POST">
        <div class="box">
            Write your ID : <input type="text" name="S_id" placeholder="Type Your ID" >
            <input type="submit" value="Seach" name="rseach">
        </div>
    </form>
</body>
</html>
<!-- Ending HTML Codes For Seach -->


