<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php
// 1-2-3-4 tasks
class Item
{
  public $id;
  public $name;
  public $description;
  public $price;

  public function view()
  {
    echo "<div id='item$this->id'>
            <span>$this->name</span>
            <p>$this->description</p>
            <span>Цена: $this->price</span>
          </div>";
  }

  public function __construct($id, $name, $description, $price)
  {
    $this->id = $id;
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->view();

  }
}

$item1 = new Item("1","vodka","the best russian drink", "$100"); /*на самом деле я не люблю водку)))*/

class ItemImage extends Item {
 public $image;

 public function view()
  {
    echo "<div id='item$this->id'>
            <div>$this->name</div>
            <img src='$this->image' alt='picture' height='200px' width='200px'>
            <p>$this->description</p>
            <span>Цена: $this->price</span>
          </div>";
  }
  public function __construct($id, $name, $image, $description, $price)
  {
    $this->id = $id;
    $this->name = $name;
    $this->image = $image;
    $this->description = $description;
    $this->price = $price;
    $this->view();
  }
}
$item2 = new ItemImage("2","Stolichnaya", "https://av.ru/product/he9/h27/8844342984734.jpg"  ,"the best russian drink", "$200");

//5 task
class A {
  public function foo() {
    static $x = 0;
    echo ++$x;
  }
}
$a1 = new A();
$a2 = new A();
$a1->foo(); // 1
$a2->foo(); // 2
$a1->foo(); // 3
$a2->foo(); // 4  из-за того, что переменная статическая и наследует все присвоенные ей результаты

// 6 task
class B {
  public function foo() {
    static $x = 0;
    echo ++$x;
  }
}
class C extends B {
}
$b1 = new B();
$c1 = new C();
$b1->foo(); // 1
$c1->foo(); // 1
$b1->foo(); // 2
$c1->foo(); // 2 потому что класс C унаследовал себе свойство, и к свойству класса В не имеет отношения

?>
</body>
</html>