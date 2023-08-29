write a php program to remove a specified character from a non-empty string using index of that character.
<?php

$myName = "silver";
// echo strlen($myName);
function swapname($myName)
{
    $count = strlen($myName) -4;
    $firstCharacter = $myName[0];
    $middlecharacter = $myName[$count];
    $myName[$count] = $firstCharacter;
    $myName[0] = $middlecharacter;
    echo $myName;


}
    swapname($myName);
    echo $myName;
?>






?>