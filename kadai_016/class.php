<?php
//クラスを定義する
class Food {
     //プロパティを定義する
     private $name;
     private $price;

     //コンストラクタを定義する
     public function __construct(string $name, string $price) {
         $this->name = $name;
         $this->price = $price;
     }
     // メソッドを定義する
    public function show_price() {
        return $this->price;
       
    }
}
     //インスタンス化する
     $food = new Food('potate', 250);


     //値を出力する
     print_r($food);
?>     

<?php
//クラスを定義する
class Animal {
     //プロパティを定義する
     private $name;
     private $height;
     private $weight;

     //コンストラクタを定義する
     public function __construct(string $name, int $height, string $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
     }
     // メソッドを定義する
     public function show_height() {
        return $this->height;        
    }
}    
        //インスタンス化する
       $animal = new Animal('dog', 60, 5000);

      //値を出力する
      print_r($animal);
      echo $food->show_price();
      echo "<br>";
      echo $animal->show_height();
?>
     

