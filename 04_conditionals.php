<?php

/* ------Conditionals and Operators -----*/

/* ------Operators -------*/

/*
    <Less than
    > Greater than
    <= Less than or equal to
    >= Greater than or equal to
    == Equal to
    === Identical to
    != Not equal to
    !== Not identical to

*/

/* ---- If Statements ------*/

/*
** If statement Syntax
if(Condition) {
    //code to be executed if condition is true
}
*/

$age = 20;

// if ($age >= 18) {
//     echo "You are old enough to vote!";
// } else {
//     echo "sorry, you are too young to vote.";
// } 

//Dates
$today = date("F j, Y, g:i a");

$t = date("H");

if ($t < 12) {
    echo "Have a goodmorning";
}
// } else if ($t < 17) {
//     echo "Have a goodafternoon!";
// } else  {
//     echo "Have a good evening!";
// }
