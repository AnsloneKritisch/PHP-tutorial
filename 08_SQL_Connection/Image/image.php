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
    <style>
        body{
            text-align: center;
        }

        .tab{
            padding: 10px ;
            margin: 20px auto ;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        #btn{
            border: 2px solid black ;
            padding:10px ;
        }

    </style>
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
    if(($_REQUEST['name']=="")|| empty($_FILES['image']))
    {
        echo'<script>windows.alert("PLease Fill ALl Ther Fields")</script>' ;
    }

    else
    {
        $name = $_REQUEST['name'] ;
        $image = $_FILES['image'] ;
        $iName = $_FILES['image']['name'] ;
        $i_tmp_Name = $_FILES['image']['tmp_name'] ;
        move_uploaded_file($i_tmp_Name , "save/".$iName) ;

        $sql = "INSERT INTO image(name,image)VALUES('$name','$iName')";

        if(mysqli_query($conn,$sql))
        {
            echo'<script>window.alert("Image Uploaded Succesfully")</script>';
        }

        else
        {
            echo'<script>window.alert("Unable To Upload)</script>';
        }

        
    }
}

?>
<!-- Ending PHP Codes to Insert Data -->




<!-- Starting PHP Codes TO Fetch Data -->

<?php

if(isset($_REQUEST['show']))
{
    $sql = "SELECT * FROM image";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        echo'<table border="1" class="tab">';

        echo"<tr>";
        
        echo"<thead>";
        echo"<th>Name</th>";
        echo"<th>Photo Uploaded</th>";
        echo"<th>Delete</th>";
        echo"</thead>"; 
        
        echo"</tr>";
        
        echo"<tbody>";
        while($row=mysqli_fetch_assoc($result))
        {
            echo'<tr>';
            echo"<td>".$row['name']."</td>";
            echo '<td> <img src="save/'.$row['image'].'" height="300" width="500"> </td>';
            echo '<td> <form action="" method="POST" class="tab" >
            <input type="hidden" name="slno" value='.$row["slno"].'>
            <input type="submit" value="Delete" name="del" id="btn">
            </form>
            </td>';      

            echo "</tr>";
        }

        
        echo "</tbody>" ;
        echo '</table>' ;
        echo '</table>' ;
    }
    
    else
    {
        echo'<script>window.alert("Cannot Upload Image")</script>';
    }
}

?>

<!-- Ending PHP Codes TO Fetch Data -->




<!-- Starting PHP Codes Delete Data -->

<?php

if(isset($_REQUEST['del']))
{
    $slno = $_REQUEST['slno'] ;
    $sql = "DELETE FROM image WHERE slno='".$slno."' " ;
    
    if (mysqli_query($conn,$sql))
    {
        echo '<script>window.alert("Data Deleted Succesfully")</script>' ;
        echo '<script>location.href="image.php"</script>' ;
    }
    
    else
    {
        echo '<script>window.alert("Unable to Delete Data")</script>'   ; 
    }

}

?>

<!-- Ending PHP Codes Delete Data -->