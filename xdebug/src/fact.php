<?php

function myfact($num)
{
    factorial($num);
}

function factorial(int $num) : int
{
    if ($num <= 1)
        return 1;
    echo 'Enter'.PHP_EOL;
    return $num + myfact($num -1 );
}

$number = 10;

echo "Factorial of $number = " . factorial($number);