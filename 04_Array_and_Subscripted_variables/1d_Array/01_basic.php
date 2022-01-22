<?php

$a = array(10,20,30,40,50) ;
$b = count($a) ;
echo "Number Of array ", $b ;
echo "<br> All the numbers in the array are >>> " ;
for ($i=0; $i < $b ; $i++)
{ 
    echo $a[$i] , ";" ;
}

?>