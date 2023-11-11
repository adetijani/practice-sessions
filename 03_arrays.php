<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

//Simple array of numbers
//$numbers -[1,2,3,4,5];

//Simple array of strings
//$colors -['red', 'blue', 'green'];

//Using the array function to create an array of numbers
//$numbers = [1,2,3,4,5];

//outputing values from an array
//echo $numbers[0];
//echo $numbers[1] + $numbers[2] + $numbers[3] + $numbers[5];

// We can use print_r or var_dump to see the contents of an array
//var_dump($numbers);

/* -------Associative Arrays ------*/

/*
Associative arrays allow us to use named keys to identify values.

*/

$colors = [
    1 => 'red',
    2 => 'green',
    3 => 'blue',
];
//echo $colors[1];

//Strings as keys
$hex = ['red'];
//var_dump($hex);

/* ----Multi-dimensional arrays ----*/

/*
Multi-dimnsional arrays are often used to store data in a table format

*/

//Single person
$person1 =[
    'first_name' => 'Tijani',
    'last_name' => 'adebowale',
    'email' => 'tadebowale@gmail.com',
];

// Array of people
$people = [
  $person1, //   [...$person1]
  [
    'first_name' => 'ade',
    'last_name' => 'tijani',
    'email' => 'ade@gmail.com',
  ],
  [
    'first_name' => 'Junior',
    'last_name' => 'debo',
    'email' => 'jdebo@gmail.com',
  ],
];

//var_dump($people);

//Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo $people[2]['email'];

//encode to JSON
//var_dump(json_encode($people));

//Decode from JSON
$jsonobj ='{"first_name","tijani","last_name":"secure","email":"tjay@gmail.com"}';

var_dump(json_decode($jsonobj, ) );