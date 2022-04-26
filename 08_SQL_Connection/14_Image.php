<!--Starting PHP Codes for connecting Database -->
<?php
 
 $host = "localhost" ;
 $user = "root" ;
 $pass = "" ;
 $db = "office" ;
 
 $conn = mysqli_connect($host , $user , $pass , $db ) ;

 if (!$conn)
 {
     die("404 Error") ;
 }
 ?>
 <!--Ending PHP Codes for connecting Database -->

<!-- Strarting HTML Codes for insering Data -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data" >
        Name: <input type="text" name="name" placeholder="Name Here">
        <br> <br>
        Image: <input type="file" name="image"> 
        <br> <br>
        <input type="submit" value="Submit" name="reg">
        <input type="submit" value="Show Tables" name="show">
    </form>
</body>
</html>
<!-- Ending HTML Codes for insering Data -->

<!-- Starting PHP Codes to Insert Data -->
<?php

if (isset($_REQUEST['reg']))
{
    if(($request['name']=="")|| empty($_FILES['image']))
    {
        echo'<script>windows.alert("PLease Fill ALl Ther Fields")</script>' ;
    }

    else
    {
        $name = $_REQUEST['name'] ;
        $image = $_FILES['image'] ;
        $iname = $_FILES['image']['name'] ;
        $i_tmp_name = $_FILES['img']['tmp_name'] ;

        echo $iname ;
        echo $i_tmp_name ;
        // move_uploaded_file($i_tmp_name , "Image/".$iname) ;

        
    }
}

?>
<!-- Ending PHP Codes to Insert Data -->

