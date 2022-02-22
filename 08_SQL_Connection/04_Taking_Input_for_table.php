<!-- Starting PHP Codes for connecting SQL Database -->

<?php

$host = "localhost" ;
$user = "root" ;
$pass = "" ;
$db = "school" ;

$conn = mysqli_connect( $host , $user , $pass , $db ) ;

if (!$conn)
{
    die ("Connection Failed") ;
}

else
{
    echo ("Connected") ;    
}
?>

<!-- Ending PHP Codes for connecting SQL Database -->


<!-- Starting HTML Codes for talking Input -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        *{
            padding: 6px ;

        }

        body{
            text-align: center;
        }

        input{
            border: none;
            border-bottom: 2px solid black;
        }

        input:focus{
            outline: none;
        }

        #box{
            border: 2px solid black ;
        }

    </style>
</head>
<body>
    <form action="" method="POST">
        <div>
            Name : <input type="text" name="Name" id="">
        </div>
        <br>
        <div>
            Address : <input type="text" name="Address" id="">
        </div>
        <br>
        <div>
            Fees : <input type="text" name="Fees" id="">
        </div>
        <br>
        <input type="submit" value="Register Now" name="reg" id="box">

    </form>
    
</body>
</html>

<!-- Ending HTML Codes for talking Input -->