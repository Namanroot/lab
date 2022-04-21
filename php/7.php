<?php
    $arr=[1,2,3,4];
    echo "The array size is".count($arr);
    $a=array(array(2,3,4),
    array(3,5,7),
    array(8,9,10));
    $res=0;
    foreach($a as $in)
    {
        $res=$res+count($in);
    }
    echo "The array size is".$res;
    ?>