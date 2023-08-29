write a php program to compute the sum of two given intergers,if two values are equal then return the tipple of their sum

<?php
function test($age, $num) 
{
    return $age == $num ? ($age + $num)*3 : $age + $num;
}
echo test(1, 2)."\n";
echo test(3, 2)."\n";
echo test(2, 2)."\n"; 