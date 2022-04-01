<?php

$var = addcslashes("My name is yash","a");

$var2 = addslashes("My name 'is' yash");

$binhex = bin2hex("Yash");

$cp = chop("he is good","od");

$cr = chunk_split("He is a good boy",1,"..."); 

$h2b = hex2bin("48656c6c6f20576f726c6421");

$lc1 = lcfirst("Hello World");

$uc1 = ucfirst("hello World");

$od = ord("Yash");

$ucw = ucwords("yash is a good boy");

$converttocode = convert_uuencode("Hii everyone");

$converttodecode = convert_uudecode(",2&EI(&5V97)Y;VYE `");



echo ($var);
echo "<br>";
echo ($var2);
echo "<br>";
echo ($binhex);
echo "<br>";
echo ($cp);
echo "<br>";
echo ($cr);
echo "<br>";
echo ($h2b);
echo "<br>";
echo ($lc1);
echo "<br>";
echo ($uc1);
echo "<br>";
echo ($od);
echo "<br>";
echo ($ucw);
echo "<br>";
echo ($converttocode);
echo "<br>";
echo ($converttodecode);


?>
