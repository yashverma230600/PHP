<?php

$num_one=$POST['num_one'];
$num_two=$POST['num_two'];
if(isset($_POST['addition']))
{ 
    $sum=$num_one+$num_two;
    echo"The sum of two numbers is <input type=text value=$sum readonly=>";
}
if(isset($_POST['subtraction']))
{ 
    $sub=$num_one-$num_two;
    echo"The difference of two numbers is <input type=text value=$sub readonly=>";
}

if(isset($_POST['multiply']))
{ 
    $mul=$num_one*$num_two;
    echo"The difference of two numbers is <input type=text value=$mul readonly=>";
}
if(isset($_POST['divide']))
{ 
    $div=$num_one/$num_two;
    echo"The difference of two numbers is <input type=text value=$div readonly=>";
}





?>