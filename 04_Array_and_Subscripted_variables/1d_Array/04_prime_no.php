<?php

$a = array(10,20,30,40,50) ;
$b = count($a) ;

for($i=0 ; $i < $b ; $i++)
{
    $x = $a[$i] ;
    $c = 0 ;
    
    for ($j=1; $j <= $x ; $j++)
    { 
       if ($x % $j === 0)
       {
           $c = $c + 1 ;
       } 
    }
    if ($c == 2)
    {
        echo $x ;
    }
}
?>