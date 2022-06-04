
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


<!-- Starting PHP Codes for Inserting Data  -->

<?php

if (isset($_REQUEST['reg']))
{
    if(($_REQUEST['name']=="")||($_REQUEST['email']=="")||($_REQUEST['pass']=="")||($_REQUEST['conpass']==""))
    {
       $msg='<div class="alert alert-warning text-center mt-5">Please Fill all the Fields</div>';
    }

    else
    {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];
        $conpass = $_REQUEST['conpass'];
        
        $sql="SELECT email FROM login WHERE email='".$email."'";
        $result=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)==1)
        {
            $msg='<div class="alert alert-warning text-center mt-5">Email Already Registered</div>';
        }
        
        else
        {
            if($pass==$conpass)
            {
                $sql="INSERT INTO login(name,email,pass,conpass)VALUES('$name','$email','$pass','$conpass')";
                
                if(mysqli_query($conn,$sql))
                {
                    $msg='<div class="alert alert-success text-center mt-5">Regsitartion Succesfully</div>';
                }
            }
            
            else
            {
                $msg='<div class="alert alert-warning text-center mt-5">Password and Confirm Password Must Be Same</div>';
            }
        
        }
    }


}

?>



<!-- Ending PHP Codes for Inserting Data  -->


<?php

if(isset($_REQUEST['del']))
{
    $slno = $_REQUEST['slno'] ;
    $sql = "DELETE FROM login WHERE slno='".$slno."' " ;
    
    if (mysqli_query($conn,$sql))
    {
        $msg1='<div class="alert alert-warning text-center mt-5 ml-3 ">Data Deleted Sucessfullly</div>';
    }
    
    else
    {
        $msg1='<div class="alert alert-warning text-center mt-5 ">Unable To Delete Data</div>';
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">


       

</head>
<body>
<div class="container-fluid cont" >
<div class="row">
<div class="col-md-5 offset-sm-1 mt-4">
    <form action="" method="POST" class="form-group shadow-lg p-5">
        <div>
            Name : <input type="text" name="name" id="" placeholder="Write Your Name" class="form-control" >
        </div>
        <br>
        <div>
            E-Mail : <input type="email" name="email" id="" placeholder="Write your Email" class="form-control">
        </div>
        <br>
        <div>
            Password : <input type="password" name="pass" id="" placeholder="Password" class="form-control">
        </div>
        <br>
        <div>
            Confirm Password : <input type="password" name="conpass" id="" placeholder="Confirm Password" class="form-control">
        </div>
        <br>
        <br>
        <div  class="text-center">
            <input type="submit" value="Register Now" name="reg" id="box"  class="btn btn-danger btn-sm">
            <?php if(isset($msg)){echo $msg;} ?>
        </div>
    </form>

</div>
<div class="col-md-5">
<?php

$sql = "SELECT * FROM login " ;
$result = mysqli_query($conn,$sql) ;
$number_of_tables =  mysqli_num_rows($result) ;

if (mysqli_num_rows($result)>0)
{
    echo '<table  class="table table-striped table-dark text-center mt-5 px-3 ml-5" ">';
    echo "<tr>";
    echo "<thead>";
    echo "<th>ID</th>";
    echo"<th>Name</th>";
    echo"<th>Email</th>";
    echo"<th>Password</th>";
    echo"<th>Delete</th>";
    echo"<th>Edit</th>";
    echo "</thead>";
    echo"<tr>";
    echo"<tbody>";

    while($row=mysqli_fetch_assoc($result))
{
    echo"<tr>";
    echo"<td>".$row['slno']."</td>";
    echo"<td>".$row['name']."</td>";
    echo"<td>".$row['email']."</td>";
    echo"<td>".$row['pass']."</td>";
    echo '<td> <form action="" method="POST">
            <input type="hidden" name="slno" value='.$row["slno"].'>
            <input type="submit" value="Delete" name="del" class="btn btn-danger btn-sm">
            </form>
            </td>';
            echo '<td> <form action="" method="POST>
            <input type="hidden" name="slno" value='.$row["slno"].'>
            <input type="submit" value="Edit" name="edit" class="btn btn-primary btn-sm">
            </form>
            </td>';
    echo"</tr>";
}
echo"</tbody>";
echo"</table>";
}
else
{
    echo"No Data Found";
}
?>
<?php
if(isset($msg1)){echo $msg1;}
?>



</div>
</div>
</div>


    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
 

<!-- Ending PHP Codes For HTML Form -->





