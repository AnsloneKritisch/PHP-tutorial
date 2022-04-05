
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
    <title>Profile</title>
    <style>
    
    *{
        padding: 0px;
        margin: 0px;
        outline: none;
        box-sizing: border-box;
    }
    
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 80vh;
        padding:40px;
        background-image: linear-gradient(to bottom, #c955ac, #fb7702);
        background-repeat: no-repeat ;
        background-size: 8890px 786px;
        /*! background-color: black; */
    }
    
    .main{
        display: flex;
    }
    
    .box{
        margin: 10px ;
        padding: 20px;
        width: 401px;
        height:  436px;
        box-sizing: border-box;
        text-align: center;
        box-shadow: 0px 10px 10px rgba(0,0,0,1);
        justify-content: space-evenly;
        background-color: white;
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
    
    .btn{
        border:2px solid black;
        padding: 14px;
        width: 138px;
    }

    #box2{
        order: 3;
    }

    #box4{
        order: -1; 
        padding: 1px;
        width: 550px;

    }

    #box1{
        order:1 ;
    }

    #btn{
        border: 2px solid black ;
        paddind : 10px ;
    }
      
    </style>
</head>
<body>
    <div class="main">

        <div class="box" id="box1">
            <form action="" method="post">
                Name: <input type="text" name="name" id="" placeholder="Write your Name">
                <br> <br>
                E-Mail: <input type="email" name="email" id="" placeholder="Write your Email">
                <br> <br>
                Password: <input type="password" name="pass" id="" placeholder="Password">
                <br> <br>
                Confirm Passsword : <input type="password" name="conpass" id="" placeholder="Confirm Password">
                <br> <br>
                <br> <br>
                <input type="submit" value="Register Now" name="reg" class="btn">
                <input type="submit" value="Show Tables" name="show" class="btn">
            </form>
        </div>

       

        <div class="box" id="box2">
            <form action="" method="post">
                Name: <input type="text" name="name" id="" placeholder="Write your Name">
                <br> <br>
                E-Mail: <input type="email" name="email" id="" placeholder="Write your Email">
                <br> <br>
                Password: <input type="password" name="" id="">
                <br> <br>
                Confirm Passsword : <input type="password" name="" id="">
                <br> <br>
                <br> <br>
                <input type="submit" value="Update" name="" class="btn">
            </form>
        </div>

    </div>
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


<!-- Starting PHP Codes To Fetch Data -->

<?php

if (isset($_REQUEST['show']))
{
    $sql="SELECT * FROM register";
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0)
    {
        echo'<div class="box" id="box4">';
        echo'<table border="1">';
        echo"<tr>";
        echo"<thead>";
        echo"<th>Name</th>";
        echo"<th>Email</th>";
        echo"<th>Password</th>";
        echo"<th>Confirm Password</th>";
        echo"<th>Delete</th>";
        echo"<th>Edit</th>";
        echo"</thead>";
        echo"</tr>";
        echo"<tbody>";
        
        while($row=mysqli_fetch_assoc($result))
        {
            echo'<tr>';
            echo"<td>".$row['name']."</td>";
            echo"<td>".$row['email']."</td>";
            echo"<td>".$row['pass']."</td>";
            echo"<td>".$row['conpass']."</td>";
            echo '<td> <form action="" method="POST" >
            <input type="hidden" name="srno" value='.$row["srno"].'>
            <input type="submit" value="Delete" name="del" id="btn">
            </form>
            </td>';
            echo '<td> <form action="" method="POST" >
            <input type="hidden" name="srno" value='.$row["srno"].'>
            <input type="submit" value="Edit" name="edit" id="btn">
            </form>
            </td>';

            echo "</tr>";
        }

        echo "</tbody>" ;
        echo '</table>' ;
        echo'</div>';

}

}

?>



<!-- Ending PHP Codes To Fetch Data -->



<!-- Starting PHP Codes to delete Data -->




<!-- Ending PHP Codes to delete Data -->