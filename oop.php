<?php
class Human{
    //Свойства (переменные)
    //public $height; //доступ к свойству за пределами класса
    protected $name; //доступ к свойству за пределами класса
    protected $weight = 10;
    private $age = 23;
    //Методы (функции)
    public function run(){
        echo "Беги";
    }
    public function __construct($name, $weight, $age)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }
}
//Экземпляр класса
$person = new Human('Миша', '75', '23');
$person2 = new Human('Вася', '65', '34');
//$person ->run();//Беги
//$person ->getAge();//23
//$person -> height;
abstract class Animal(){//абстрактный класс
    public function run(){}
    public function eat(){}
    public function say(){}
}
class Cat extends Animal{ //наследование
    public function say(){
        echo 'Мяу';
    }
}
class Dog extends Animal{ //наследование
    public function say(){
        echo 'Гаф';
    }
}
class Post{
    public function getTitle(){
        echo "Title common";
    }
}
class News extends Post{
    public function getTitle(){
        echo "Title news";
    }
    
}
class Article{
    public function getTitle(){
        echo "Title article";
    }
}
?>