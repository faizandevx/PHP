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

?>
</body>
</html>