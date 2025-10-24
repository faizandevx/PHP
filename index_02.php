<?php declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2); 
?>

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


//PHP Math Functions
//PHP has a set of math functions that allows you to perform mathematical tasks on numbers.
echo "<br>";
//PHP pi() Function
echo(pi());
$radius = 5;
$area = pi() * pow($radius, 2);
echo "Area: " . $area;

//PHP min() and max() Functions
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200));

//PHP abs() Function
$a = 8;
$b = 15;
echo "Difference: " . abs($a - $b);

//PHP Constants
echo "<br>";
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

const MYCAR = "Volvo";
echo MYCAR;
//PHP Constant Arrays
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[1];

//PHP Magic Constants
echo "<br>";
echo __DIR__;
echo __FILE__;
function myValue(){
  return __FUNCTION__;
}
echo myValue();
echo __LINE__;

class Fruits {
  public function myValue(){
    return __METHOD__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();

trait message1 {
  public function msg1() {
    echo __TRAIT__; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();

//PHP Operators
//Operators are used to perform operations on variables and values.
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}

//PHP if Statement
echo "<br>";
//If statement executes the code if one condition is true
if (5 > 3) {
  echo "Please execute the code!";
}

$t = 14;

if ($t < 20) {
  echo "Please execute the code!";
}

//PHP if Operators
echo "<br>";
//PHP Comparison Operators
$t = 14;

if ($t == 14) {
  echo "Have a good day!";
}

//The === If Operators
$x = 100;  
$y = 100;

if ($x === $y) {
  echo "$x is identical to $y";
}

//The <> Operators (Not equal)
$x = 100;  
$y = 50;

if ($x <> $y) {
  echo "$x is not equal to $y";
} 

//The !== Operators (Not Identical)
$x = 100;  
$y = 50;

if ($x !== $y) {
  echo "$x is not identical to $y";
}

//PHP Logical Operators
$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
  echo "Both conditions are true";
}

//Comparing many conditions using only If statement
$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7";
}

//PHP if...else Statements
echo "<br>";
$t = date("H");

if ($t < 20) {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

//PHP - The if...elseif...else Statement
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

//PHP Shorthand if Statements
echo "<br>";
$a = 5;

if ($a < 10) $b = "Hello";

echo $b;

$a = 13;
$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;

$a = 13;

///PHP Nested if Statement
echo "<br>";
if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}

//The PHP switch Statement
echo "<br>";
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

//The PHP Break Keywords
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

//The default keywords
$d = 4;

switch ($d) {
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
    break;
  default:
    echo "Looking forward to the Weekend";
}

//Common Code Block
$d = 3;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The weeks feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}

//Loops in PHP 
echo "<br>";
//The PHP while Loop
$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}
//The PHP break Statement
$i = 1;

while ($i < 6) {
  if ($i == 3) break;  
    echo "_";

  echo $i;
  $i++;
} 

//The PHP continue Statement
$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}

$i = 1;

while ($i < 6):
  echo $i;
  $i++;
endwhile;

$i = 0;

while ($i < 100) {
  $i+=10;
  echo "$i<br>";
}

//PHP do while Loop
echo "<br>";
//The PHP do...while Loop
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);

$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 6);

//The PHP continue Statement
$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);

//PHP for Loop
echo "<br>";
//The PHP for Loop
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

//The PHP break Statement
for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) break;
  echo "The number is: $x <br>";
}

//The PHP continue Statement
for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) continue;
  echo "The number is: $x <br>";
}

for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}

//PHP foreach Loop
echo "<br>";
//The PHP foreach Loop on Arrays
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $x) {
  echo "$x <br>";
}

//Print both the key and the value from the $members array:
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}

// class Car {
//   public $color;
//   public $model;
//   public function __construct($color, $model) {
//     $this->color = $color;
//     $this->model = $model;
//   }
// }

//The PHP foreach Loop on Objects
$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
  echo "$x: $y<br>";
}

//The PHP break Statement
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}

//The PHP Continue Statement 
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}

///PHP Foreach Loop Byref
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);

//By assigning the array items by reference, changes will affect the original array:
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);

//endforeach Loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;

//PHP Break Statement
echo "<br>";
//Break in For loop
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}

//Break in While Loop
$x = 0;
 
while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
} 

//Break in dowhile Loop
$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);

//Break in Foreach Loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}

//PHP Continue Statement
echo "<br>";
//Continue in For Loops
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}

//Continue in While Loop
$x = 0;
 
while($x < 10) {
  $x++;
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
} 

//Continue in Do While Loop
$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);

//Continue in Foreach Loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}

//PHP Functions
echo "<br>";
//Create a Function
function myMessage() {
  echo "Hello world!";
}

myMessage();

//PHP Function Arguments
// function familyName($fname) {
//   echo "$fname Refsnes.<br>";
// }

// familyName("Jani");
// familyName("Hege");
// familyName("Stale");
// familyName("Kai Jim");
// familyName("Borge");

function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Faizan", "1975");
familyName("Farhan", "1978");
familyName("Waqas", "1983");

//PHP Default Argument Value
// function setHeight($minheight = 50) {
//   echo "The height is : $minheight <br>";
// }

// setHeight(350);
// setHeight(); // will use the default value of 50
// setHeight(135);
// setHeight(80);

// function sum($x, $y) {
//   $z = $x + $y;
//   return $z;
// }

//PHP Functions - Returning values
// echo "5 + 10 = " . sum(5,10) . "<br>";
// echo "7 + 13 = " . sum(7,13) . "<br>";
// echo "2 + 4 = " . sum(2,4);

//Passing Arguments by Refrence
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;

//Variable Number of Arguments
function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;

function myFamily($lastname, ...$firstname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;

//Arrays in PHP
echo "<br>";
//An array stores multiple values in one single variable:
$cars = array("Volvo", "BMW", "Toyota"); 

var_dump($cars);

//Array Items
// function example:
// function myFunction() {
//   echo "This text comes from a function";
// }
// create array:
// $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);

// calling the function from the array item:
// $myArr[3]();

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

//PHP Global Variables - Superglobals
echo "<br>";
///Superglobals were introduced in PHP 4.1.0, and are built-in variables that are always available in all scopes.
// $x = 10;
// $y = 20;

// function sum() {
//   global $x, $y;
//   $z = $x + $y;
//   echo $z;
// }

// sum();

//GLOBAL VARIABLES
// $x = 75;
  
// function myfunction() {
//   echo $GLOBALS['x'];
// }

// myfunction();

//GLOBAL Inside a Function
// $x = 75;
  
// function myfunction() {
//   global $x;
//   echo $x;
// }

// myfunction();

// $x = 100;

// echo $GLOBALS["x"];
// echo $x;

function myfunction() {
  $GLOBALS["x"] = 100;
}

myfunction();

echo $GLOBALS["x"];
echo $x;


?>

</body>
</html>