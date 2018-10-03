<?
abstract class Product { 
    private $id;
    private $name;
    private $price;
    function __construct($id,$name,$brand,$price){
        $this->id=$id;
        echo 'id = ';
        echo $id;
        $this->name=$name;
        echo ' name = ';
        echo $name;
        $this->brand=$brand;
        echo ' brand = ';
        echo $brand;
        $this->price=$price;
        echo ' price = ';
        echo $price;
    }

    abstract function buy($id,$col);

}

class physical extends Product {
    function buy($price,$col) {
     static $full;
     $res=$price*$col;   
     $full=$full+$res;
     echo "Total sale = ";
     echo $full;
     return $res;
    }

   }

class digital extends Product {

      function buy($price,$col) {
            static $full;
            echo "Total sale = ";
            $res=$price/2*$col;
            $full=$full+$res;
            echo $full;
           return $res;
    }
    }



class weight extends Product {
    function buy($price,$col) {
     static $full;
    echo "Total sale = ";
    $res=$price*$col;
    $full=$full+$res;
     echo $full;
     return $res;
    }
  }

$product1=new physical(2,"manual","Kyoshi",24);
$a=$product1->buy(24,1);
echo " buy = $a";
echo "</br>";
$a=$product1->buy(24,3);
echo " buy = $a";
echo "</br>";
$a=$product1->buy(24,4);
echo " buy = $a";
echo "</br>";
$product2=new digital(3,"manual","Kyoshi",24);
$a=$product2->buy(24,1);
echo " buy = $a";
echo "</br>";
$product3=new weight(4,"screw","Tamiya",2);
$a=$product3->buy(2,10);
echo " buy = $a";
echo "</br>";
$a=$product3->buy(2,3);
echo " buy = $a";
echo "</br>";
$a=$product3->buy(2,5);
echo " buy = $a";
echo "</br>";


trait Single {
    static $instance=null; 

    private function __construct() 
    { 
      
    } 

    public static function instance() 
    { 
        if (Singleton::$instance == null) 
        { 
            Singleton::$instance = new Singleton; 
            echo "New ";
        } 

        echo "in instance()<br>"; 
        return Singleton::$instance; 
    } 
}


class Singleton{
    use Single;
}    
     
$a = Singleton::instance(); 
$b = Singleton::instance(); 
?>