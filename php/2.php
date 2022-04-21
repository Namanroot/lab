<?php
    function sum($n)
    {
        $sum=0;
        while($n!=0)
        {
            $rem=$n%10;
            $sum=$sum+$rem;
            $n=$n/10;
        }
        return $sum;
    }
    $n=(int)readline("ENter a number: ");
    echo "Sum of digits of " .$n. "  is  " .sum($n);
?>