<!-- Connecting with database by exporting database.php -->

<!-- Starting Codes -->

<?php
include('01_database.php');
?>

<!-- Ending Codes -->

<!-- Starting HTML Codes for login -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <div class="main">
    <form action="" method="post" class="box">
      <h1>Log In</h1>
       Email :<input type="email" name="email" id="" placeholder="Type your E-Mail"
       value="<?php if(isset($_COOKIE['email'])){echo $_COOKIE['email'];}?>">
      <br> <br>
      Password: <input type="password" name="pass" id="" placeholder="Password"
      value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}?>">
      <br><br>
      Remember Me : <input type="checkbox" name="rem" >
      <br><br>

      <input type="submit" value="Log In" name="log" class="btn">
      <a href="02_signup.php"><input type="button" value="Sign Up" class="btn"></a>
    </form>
  </div>
</body>
</html>

<!-- Ending HTML Codes for login -->

<!-- Starting PHP Codes For Checking Data -->
<?php

session_start();
if(!isset($_SESSION['islogin']))
{
    if(isset($_REQUEST['log']))
    {
        if(($_REQUEST['email']=="")||($_REQUEST['pass']==""))
        {
            echo'<script>window.alert("Please Fill all The Fields")</script>';
        }
        else
        { 
            $email=$_REQUEST['email']; 
            $pass=$_REQUEST['pass'];
            $sql=" SELECT email , pass FROM login WHERE email='".$email."' && pass='".$pass."' ";
            $result=mysqli_query($conn,$sql);

            // Fetching Data to Pass Name To session To use The Name of the person instead of email Id
            if(mysqli_num_rows($result)==1)
            {
               $sql1="SELECT *FROM login where email='".$email."'";
              $result=mysqli_query($conn,$sql1);
              $row=mysqli_fetch_assoc($result);
              $name=$row['name'];
  
                $_SESSION['email']=$email;
                $_SESSION['name']=$name;
                $_SESSION['islogin']=true;
                if(isset($_REQUEST['rem']))
                {
                  setcookie('email',$email);
                  setcookie('password',$pass);
                  echo'<script>location.href="04_home.php"</script>';
                }

                else
                {
                  echo'<script>location.href="04_home.php"</script>';

                }
          }
            
            else
            {
                echo'<script>window.alert("Wrong Email or Password ")</script>';
            }
        }
    }
}

else
{
    echo'<script>location.href="04_home.php"</script>';
}

?>
<!-- Ending PHP Codes For CHecking Data -->


