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

if (isset($_REQUEST[''])) {
    # code...
}

?>

<!-- Ending the PHP Codes for Insert Data -->