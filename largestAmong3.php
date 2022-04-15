<?php
$a=10;
$b=6;
$c=9;
switch($a>$b)
{
case 0:
	{
    	switch($b>$c)
        	{
            	case 0:echo $c." cc is gr8";
                break;
                case 1:echo $b." b is gr8";
                break;
             }
             break;
     }
     
     
case 1:{
		switch($a>$c)
        	{
            	case 0: echo $c."c is gr8";
                break;
                case 1: echo $a." a is gr8";
                break;
             }
                break;
        }
}
?>