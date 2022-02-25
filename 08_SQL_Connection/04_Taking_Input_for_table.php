<!-- Starting PHP Codes for connecting SQL Database -->

<?php

$host = "localhost" ;
$user = "root" ;
$pass = "" ;
$db = "school" ;

$conn = mysqli_connect( $host , $user , $pass , $db ) ;

if (!$conn)
{
    echo ('<script>window.alert("404 Error")</script>') ;
}

// else
// {
//     echo ('<script>window.alert("Welcome To Registration Page")</script>') ;    
// }


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

<!-- Stating PHP Codes for Collectind data and Store it -->

<?php

if (isset($_REQUEST['reg']))
{
    if ( ($_REQUEST['Name']=="") || ($_REQUEST['Address']=="") || ($_REQUEST['Fees']=="") ) 
    {
        echo ('<script>window.alert(" Please Fill al the Fields ")</script>') ;
    }

    else
    {
        $Name = $_REQUEST['Name'] ;
        $Address = $_REQUEST['Address'] ;
        $Fees = $_REQUEST['Fees'] ;

        $sql = " INSERT INTO student(Name,Address,Fees)VALUES('$Name','$Address',$Fees) " ;

        if (mysqli_query($conn,$sql))
        {
            echo ' <script>window.alert("Data Inserted Succesfully")</script> ' ;
        }
        
        else
        {
            echo ' <script>window.alert("Data Inserted Succesfully")</script> ' ;
        }

    }
}

?>

<!-- Ending PHP Codes for Collecting data and Store it -->