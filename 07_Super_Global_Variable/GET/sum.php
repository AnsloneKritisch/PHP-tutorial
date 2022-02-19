<!-- Start PHP Codes -->

<?php

if (isset($_GET['rsub']))
{
    echo "Clicked";
}

?>


<!-- HTML Form For Taking Input for sum -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUM PHP</title>
    <style>
        *{
            font-family: cursive;
        }
        body{
            text-align: center;
        }
        #result{
            border: none;
            border-bottom: 2px solid black;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <div>
            First Number : <input type="text" name="no1" placeholder="Write First Number">
        </div>
        <br>
        <div>
            Second Number : <input type="text" name="no2" placeholder="Write Second Number">
        </div>
        <br>
        <div>
            <input type="submit" value="Submit Now" name="rsub">
        </div>
        <br>
        <div>
            Result : <input type="text" placeholder="The Result of Sum Is" id="result">
        </div>
    </form>
</body>
</html>