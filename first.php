<?php
// $arr1=[10,20,30,40,50];
// $arr2=[60,70,80,90,100];
// $arr3 = array_combine($arr1,$arr2);
// print_r($arr3);
// echo "<br>";
// echo "<br>";
// print_r(array_chunk($arr1,2));
// echo "<br>";
// echo "<br>";
// print_r(array_combine($arr1,$arr2));
// echo "<br>";
// echo "<br>";
// print_r(array_diff($arr1,$arr2));
$arr1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$arr2=["e"=>"red","f"=>"green","g"=>"blue"];
$arr3=array_diff($arr1,$arr2);
print_r($arr3);


?>