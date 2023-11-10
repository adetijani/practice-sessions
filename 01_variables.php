<?php
/** ----------PHP Data Types -------*/
/*
-String     Series of characters sorrounded by quotes
            they can be letters, numbers or symbols all sorrounded by quotes "" or ''


-Integers   Whole numbers
            they can either be positive or negative

-Float      Decimal numbers
-Boolean    true or false
-Array      Special variable, which can hold more than one value
-Object     A class
-NULL       Empty Variable      
-Resources  Special variables that hold resources

*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Adebowale'; //string
$age = 50; //int
$has_kids = true;  //boolean
$cash_on_hand = 20.4; //float


echo $age;
echo $has_kids;
var_dump( $has_kids );


// for concatenation:
echo $name . ' is ' . $age . ' years old';

//or 
echo "$name is $age years old";

echo '5' + '5';

$x = 5 + 5;
var_dump($x);
echo 10 - 5;
echo 5*6;
echo 10 / 2;
echo 10 % 3;

// CONSTANTS: They are used in situations where you know they are never going to change,
//                 for examples lets say database credentials

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;
echo DB_NAME;