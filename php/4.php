<?php
    $str=readline("Enter  a string:");
    echo "Length of string is ".strlen($str);
    echo "Reversal of string is". strrev($str);
    $str1=readline(("enter one more string :"));
    $res=strcmp($str,$str1);
    if($res==0)
    {
        echo "The two strings are equal";
    }
    else
    {
        echo "The strings are unequal";
    }
    echo "The string in uppercase".strtoupper($str1);
    echo "string rotate". strspn($str,1,strlen($str));
?>