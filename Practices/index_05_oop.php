<?php
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
//PHP OOP - Class Constants
echo "<br>";
//PHP - Class Constants
// class Goodbye {
//   const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
// }

// echo Goodbye::LEAVING_MESSAGE;

class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();

//PHP OOP - Abstract Classes
echo "<br>";

// Parent class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// Child classes
class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "French extravagance! I'm a $this->name!";
  }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();

//PHP - More Abstract Class Examples
echo "<br>";
// abstract class ParentClass {   Abstract method with an argument
//   abstract protected function prefixName($name);
// }

// class ChildClass extends ParentClass {
//   public function prefixName($name) {
//     if ($name == "John Doe") {
//       $prefix = "Mr.";
//     } elseif ($name == "Jane Doe") {
//       $prefix = "Mrs.";
//     } else {
//       $prefix = "";
//     }
//     return "{$prefix} {$name}";
//   }
// }

// $class = new ChildClass;
// echo $class->prefixName("John Doe");
// echo "<br>"; 
// echo $class->prefixName("Jane Doe");

echo "<br>";
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  // The child class may define optional arguments that is not in the parent's abstract method
  public function prefixName($name, $separator = ".", $greet = "Dear") {
    if ($name == "John Doe") {
      $prefix = "Mr";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs";
    } else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";  
echo $class->prefixName("Jane Doe");

//PHP OOP - Interfaces
echo "<br>";
//PHP-Using Interfaces
// interface Animal {
//   public function makeSound();
// }

// class Cat implements Animal {
//   public function makeSound() {
//     echo "Meow";
//   }
// }

// $animal = new Cat();
// $animal->makeSound();

//The Other Example
// Interface definition
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
} 

//PHP OOP - Traits
echo "<br>";

// trait message1 {
// public function msg1() {
//     echo "OOP is fun! ";
//   }
// }

// class Welcome {
//   use message1;
// }

// $obj = new Welcome();
// $obj->msg1();

//PHP - Using Multiple Traits
trait message1 {
  public function msg1() {
    echo "OOP is fun! "; 
  }
}

trait message2 {
  public function msg2() {
    echo "OOP reduces code duplication!"; 
  }
}

class Welcome {
  use message1;
}

class Welcome2 {
  use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";


$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();

//PHP OOP - Static Methods
echo "<br>";
//PHP-Static Method
// class greeting {
//   public static function welcome() {
//     echo "Hello World!";
//   }
//  }

// Call static method
greeting::welcome();

//PHP - More on Static Methods
echo "<br>";
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
  public function __construct() {
    self::welcome();
  }
}

new greeting();

class A {
  public static function welcome() {
    echo "Hello World!";
  }
}

class B {
  public function message() {
    A::welcome();
  }
}

$obj = new B();
echo $obj -> message(); 

class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;

//PHP OOP - Static Properties
// echo "<br>";
// class pi {
//   public static $value = 3.14159;
// }

// Get static property
// echo pi::$value;

// function printIterable(iterable $myIterable) {
//   foreach($myIterable as $item) {
//     echo $item;
//   }
// }

//PHP - Using Iterables
// echo "<br>";
// $arr = ["a", "b", "c"];
// printIterable($arr);

// function getIterable():iterable {
//   return ["a", "b", "c"];
// }

// $myIterable = getIterable();
// foreach($myIterable as $item) {
//   echo $item;
// }

//PHP - Creating Iterables
echo "<br>";
// Create an Iterator
class MyIterator implements Iterator {
  private $items = [];
  private $pointer = 0;

  public function __construct($items) {
    // array_values() makes sure that the keys are numbers
    $this->items = array_values($items);
  }

  public function current() {
    return $this->items[$this->pointer];
  }

  public function key() {
    return $this->pointer;
  }

  public function next() {
    $this->pointer++;
  }

  public function rewind() {
    $this->pointer = 0;
  }

  public function valid() {
    // count() indicates how many items are in the list
    return $this->pointer < count($this->items);
  }
}

// A function that uses iterables
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

// Use the iterator as an iterable
$iterator = new MyIterator(["a", "b", "c"]);
printIterable($iterator);

?>

</body>
</html>