<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicing PHP</title>
</head>
<body>
    
<?php

echo "My first PHP Script! <br>";
ECHO "Hello World <br>";
EcHO "Hello World <br>";

// $x = 5;
// $y = "Faizan";

// echo $x;
// echo "<br>";
// echo $y;
// echo "<br>";

$txt = "w3Schools.com";
echo "I Love $txt!";
echo "<br>";

$x = 5;
$y = 6;
echo $x + $y;

echo "<br>";
$x = 5;
var_dump($x);

var_dump(5);
var_dump("Faizan");
var_dump(3.14);
var_dump(true);
var_dump([4, 6, 60]);
var_dump(NULL);

// $x = $y = $z = "fruits <br>";
echo $x, $y, $z;

// echo $x = 5;
// function myTest() {
//     echo "<p>Variable x outside function is: $x</p>";
// }
//  echo "<p>Variable x outside function is: $x</p>";

// function myTest() {
//      $x = 5;
//     echo "<p>Variable x inside function is: $x</p>";
// }

//  echo "<p>Variable x outside function is: $x</p>";

$x = 6;
$y = 15;
// function myTest() {
//     global $x, $y;
//     $y = $x + $y;
// }
// myTest ();
// echo $y;

// function myTest() {
//   $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
// }
//  myTest ();
//  echo $y;

function myTest() {
    static $x = 0;
    echo $x;
    $x++; 
}
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";

//String
$x = "Hello World";
$y = "Hello World";
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";

//Integers
$x = 5743;
var_dump($x);

//Float     Floating point numbers
echo "<br>";
$x = 10.365;
var_dump($x);
echo "<br>";

//Boolean
$x = true;
var_dump($x);
echo "<br>";

//Array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

//Objects
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);

//Null Values
echo "<br>";
$x = "Hello world!";
$x = null;
var_dump($x);

//Casting
echo "<br>";
$x = 5;
$x = (string) $x;
var_dump($x);

//Strings in PHP
echo "<br>";
echo "Hello";
print "Hello";

$x = "John";
echo "Hello $x";

$x = "John";
echo 'Hello $x';

// returns the length of a string
echo '<br>';
echo strlen("Hello world!");

// number of words in a string
echo str_word_count("Hello world!");

echo "<br>";
echo strpos("Hello world!", "world");

//String to uppercase
echo "<br>";
$x = "Hello World!";
echo strtoupper($x);

//String to Lowercase
$x = "Hello World!";
echo strtolower($x);

//String Replace
echo "<br>";
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);

//Reverse a String
echo "<br>";
$x = "Hello World!";
echo strrev($x);

//Remove Whitespace
echo "<br>";
$x = " Hello World! ";
echo trim($x);
?> 

<p>The whitespaces are invisible in plain HTML,<br>
but check out the difference in two input fields:</p>

<?php
echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";

//Convert String into Array
echo "<br>";
$x = "Hello World!";
$y = explode(" ", $x);
//Use the print_r() function to display the result:
print_r($y);
/*
Result:
Array ( [0] => Hello [1] => World! )
*/

//PHP - Concatenate Strings
echo "<br>";
//String Concatenation

$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;

$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z;

$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z;

//PHP - Slicing Strings
echo "<br>";
//Slice a String
$x = "Hello World!";
echo substr($x, 6, 5);

//Slice String to the End
$x = "Hello World!";
echo substr($x, 6);

//Slice String From the End
$x = "Hello World!";
echo substr($x, -5, 3);

//Negative Length
$x = "Hi, how are you?";
echo substr($x, 5, -3);

//PHP - Escape Characters
echo "<br>";
//Escape Character
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;


//PHP Numbers New Tpoic for Numbers
echo "<br>";
$a = 5;
$b = 5.34;
$c = "25";

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);

//PHP Integers
echo "<br>";
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));

//PHP Floats
echo "<br>";
$x = 10.365;
var_dump(is_float($x));

//PHP Infinity
echo "<br>";
// Check if a numeric value is infinite 
$x = 1.9e411;
var_dump(is_infinite($x));

//PHP NaN Not a Number    //NaN is used for impossible mathematical operations.
echo "<br>";
// Invalid calculation will return a NaN value
$x = acos(8);
var_dump($x);

//PHP Numerical Strings
echo "<br>";
// Check if the variable is numeric   
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));

//PHP Casting Strings and Floats to Integers
echo "<br>";
// Cast float to int 
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

//PHP Casting
echo "<br>";
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

//Cast to Integer
echo "<br>";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);

//Cast to float
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);

//Cast to Boolean
echo "<br>";
$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
var_dump($h);
var_dump($i);

//Cast to Array
echo"<br>";
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

//Cast to Object
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

//Cast  to NULL
echo"<br>";
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

// $a = (unset) $a;
// $b = (unset) $b;
// $c = (unset) $c;
// $d = (unset) $d;
// $e = (unset) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);


?>
</body>
</html>