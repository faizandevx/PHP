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

echo "<br>";
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
var_dump($apple instanceof Fruit);

?>
</body>
</html>