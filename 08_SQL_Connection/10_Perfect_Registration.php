
<!-- Starting PHP Codes for Database Connection -->
<?php

$host = "localhost" ;
$user = "root" ;
$pass = "" ;
$db = "office" ;

$conn = mysqli_connect($host,$user,$pass,$db) ;

if(!$conn)
{
    die("Connection Failed");
}

?>

<!-- Ending PHP Codes for Database Connection -->





<!-- Starting PHP Codes For HTML Form -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation Form</title>
    <style>

       
*{
            margin : 0px ;
            padding : 0px ;

        }

        form{
            border: 2px solid black ;
            width : 343px;
            height: 337px;
            padding: 38px;
            margin: auto;
            background-color: white;
            box-shadow: 13px 17px 10px rgba(0,0,0,1);

        }

        body{
            text-align: center;
            font-family:cursive;
            padding: 58px;
            background-image: linear-gradient(to bottom, #f22e2e, #b404cd);
            background-repeat: no-repeat ;
            background-size: 8888px 886px ;
            
        }

        input{
            border: none ;
            border-bottom: 2px solid black;
            padding: 9px;
            margin: 7px;
        }

        input:focus{
            outline: none;
        }

        #box{
            border: 2px solid black;
            padding: 13px;
            margin: 25px;
            font-size: 16px;
        }

    
    </style>

</head>
<body>
    <form action="" method="POST">
        <div>
            Name : <input type="text" name="name" id="" placeholder="Write Your Name">
        </div>
        <br>
        <div>
            E-Mail : <input type="email" name="email" id="" placeholder="Write your Email">
        </div>
        <br>
        <div>
            Password : <input type="password" name="pass" id="" placeholder="Password">
        </div>
        <br>
        <div>
            Confirm Password : <input type="password" name="conpass" id="" placeholder="Confirm Password">
        </div>
        <br>
        <div>
            <input type="submit" value="Register Now" name="reg" id="box">
        </div>
    </form>
</body>
</html>
 

<!-- Ending PHP Codes For HTML Form -->



<!-- Starting PHP Codes for Inserting Data  -->

<?php

if (isset($_REQUEST['reg']))
{
    if(($_REQUEST['name']=="")||($_REQUEST['email']=="")||($_REQUEST['pass']=="")||($_REQUEST['conpass']==""))
    {
        echo'<script>window.alert("Please Fill all The Fields")</script>';
    }

    else
    {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];
        $conpass = $_REQUEST['conpass'];
        
        $sql="SELECT email FROM register WHERE email='".$email."'";
        $result=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)==1)
        {
            echo'<script>window.alert("Email Already Registered")</script>';
        }
        
        else
        {
            if($pass==$conpass)
            {
                $sql="INSERT INTO register(name,email,pass,conpass)VALUES('$name','$email','$pass','$conpass')";
                
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



<!-- Ending PHP Codes for Inserting Data  -->