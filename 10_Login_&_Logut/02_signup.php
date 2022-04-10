<!-- Connecting with database by exporting database.php -->

<!-- Starting Codes -->

<?php
include('01_database.php');
?>

<!-- Ending Codes -->

<!-- Starting HTML Codes for Sign up -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <style>
   
    
   body{
      
      margin: 0px;
      padding: 0px ;
      font-family: sans-serif;
      background: #34495e;
     
    }

    .box{
      width: 300px;
      padding: 40px ;
      position: absolute ;
      top: 50% ;
      left:50% ;
      transform: translate(-50% , -50%) ;
      background: #191919;
      text-align:center;     
      height: 556px;
      box-shadow: 7px 10px 26px 20px #000;
    }

    .box h1{
      color:white ;
      text-transform: uppercase;
      font-weight: 500;
    }

    .box input[type = "text"] , .box input[type= "password"] , .box input[type= "email"]{
      border: 0;
      background: none;
      margin: 20px  auto ;
      text-align: center;
      border: 2px solid #3498db ;
      padding: 14px 10px ;
      width: 200px ;
      outline: none ;
      color: white;
      border-radius: 24px;
      transition: 0.25s;

    }

    .box input[type = "text"]:focus , .box input[type= "password"]:focus , .box input[type= "email"]:focus{
      width:280px;
      border-color: #2ecc71;
    }

    .box .btn{
      background: none;
      margin: 23px auto;
      text-align: center;
      border: 2px solid #2ecc71 ;
      padding: 14px 40px ;
      outline: none ;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
      cursor:pointer;
    }

    .btn:hover{
      background: #2ecc71 ;
    }

  </style>
</head>
<body>
  <div class="main">
    <form action="" method="post" class="box">
      <h1>Sign Up</h1>
      <input type="text" name="name" id="" placeholder="Write Your Name"> 
      <br> <br>
      <input type="email" name="email" id="" placeholder="Type your E-Mail">
      <br> <br>
      <input type="password" name="pass" id="" placeholder="Password">
      <br> <br>
      <input type="password" name="conpass" placeholder="Confirm-Pasword">
      <br><br>
      <input type="submit" value="Sign Up" name="reg" class="btn">
      <a href="03_login.php"><input type="button" value="Login" class="btn"></a>
    </form>
  </div>
</body>
</html>
<!-- Ending HTML Codes for Sign up -->


<!-- Starting PHP Codes to Insering Data -->

<?php
if(isset($_REQUEST['reg']))
{
  if(($_REQUEST['name']=="")||($_REQUEST['email']=="")|| ($_REQUEST['pass']=="")||($_REQUEST['conpass']==""))
  {
    echo'<script>window.alert("Please Fill all The Fields")</script>';
  }
  
  else
  {
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $pass=$_REQUEST['pass'];
    $conpass=$_REQUEST['conpass']; 
    $sql="SELECT email FROM login WHERE email='".$email."'";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1)
    {
      echo'<script>window.alert("Email Already Registered")</script>';
    }
    
    else
    {
      if($pass==$conpass)
      {
        $sql="INSERT INTO login (name,email,pass,conpass)VALUES('$name','$email','$pass','$conpass')";
        if(mysqli_query($conn,$sql))
        {
          echo'<script>window.alert("Registration Succesfully")</script>';
        }
      }
      else
      {
        echo'<script>window.alert("Password and Confirm Password Must Be Same")</script>';
      }
    }
  }
}
?>


<!-- Ending PHP Codes to Insering Data -->