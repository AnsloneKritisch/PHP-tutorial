<?php
include('01_database.php');
session_start();
if(isset($_SESSION['islogin']))
{
echo "Welcome".$_SESSION['email'];
}
else{
  echo'<script>location.href="04_login.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <style>
    body{
      background: url(li.gif);
      background-repeat: no-repeat;
    }

  </style>
</head>
<body>
  <h1>Weclome </h1>

  <a href="05_logout.php"> <input type="button" value="Log Out"> </a>
  
</body>
</html>