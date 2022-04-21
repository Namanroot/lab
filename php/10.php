<?php
    function printa($arr,$n)
    {
        if($i=-1)
        return ;
        else
        return printa($arr,$n-1);
        echo $arr[$n];
    }
    $arr=[1,2,3,4];
    printa($arr,4);