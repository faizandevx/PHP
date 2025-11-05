<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

// class Fruit {
  // Properties
//   public $name;
//   public $color;

  // Methods
//   function set_name($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
// }

// $apple = new Fruit();
// $banana = new Fruit();
// $apple->set_name('Apple');
// $banana->set_name('Banana');

// echo $apple->get_name();
// echo "<br>";
// echo $banana->get_name();

echo "<br>";
// class Fruit {
  // Properties
//   public $name;
//   public $color;

  // Methods
//   function set_name($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
//   function set_color($color) {
//     $this->color = $color;
//   }
//   function get_color() {
//     return $this->color;
//   }
// }

// $apple = new Fruit();
// $apple->set_name('Apple');
// $apple->set_color('Red');
// echo "Name: " . $apple->get_name();
// echo "<br>";
// echo "Color: " .  $apple->get_color();

// echo "<br>";
// class Fruit {
//   public $name;
//   function set_name($name) {
//     $this->name = $name;
//   }
// }
// $apple = new Fruit();
// $apple->set_name("Apple");

// echo $apple->name;

echo "<br>";
// class Fruit {
//   public $name;
// }
// $apple = new Fruit();
// $apple->name = "Apple";

// echo $apple->name;

// echo "<br>";
// class Fruit {
  // Properties
//   public $name;
//   public $color;

  // Methods
//   function set_name($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
// }

// $apple = new Fruit();
// var_dump($apple instanceof Fruit);

//PHP OOP - Constructor
echo "<br>";
//PHP-The __Construct() Function
// class Fruit {
//   public $name;
//   public $color;

//   function __construct($name) {
//     $this->name = $name; 
//   }
//   function get_name() {
//     return $this->name;
//   }
// }

// $apple = new Fruit("Apple");
// echo $apple->get_name();

//Another Example of __Constructor() Function
// class Fruit {
//   public $name;
//   public $color;

//   function __construct($name, $color) {
//     $this->name = $name; 
//     $this->color = $color; 
//   }
//   function get_name() {
//     return $this->name;
//   }
//   function get_color() {
//     return $this->color;
//   }
// }

// $apple = new Fruit("Apple", "red");
// echo $apple->get_name();
// echo "<br>";
// echo $apple->get_color();

//PHP OOP - Destructor
echo "<br>";
// PHP - The __destruct() Function
// class Fruit {
//   public $name;
//   public $color;

//   function __construct($name) {
//     $this->name = $name; 
//   }
//   function __destruct() {
//     echo "The fruit is {$this->name}."; 
//   }
// }

// $apple = new Fruit("Apple");


//PHP OPP Destructor
echo "<br>";
//PHP-The __Destructor Function
// class Fruit {
  // Properties
//   var $name;
//   var $color;

//   // Methods
//   function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color; 
//   }
//   function __destruct() {
//     echo "The fruit is {$this->name} and the color is {$this->color}."; 
//   }
// }

$apple = new Fruit("Apple", "red");

//PHP OOP - Access Modifiers
echo "<br>";
//PHP - Access Modifiers
class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR

?>
</body>
</html>