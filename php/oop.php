<?php



//
//class Human{
//    public $name;
//    public  $family;
//
//    public  $age;
//
//    public function __construct($name,$family)
//    {
//
//        $this ->name = $name ;
//        $this ->family = $family ;
//
//    }
//
//    public function greeting(){
//        return "hi my name is {$this -> name} {$this -> family} ";
//    }
//}
//
//
//class Student extends Human
//{
//    public $subject;
//
//
//    public function __construct($name,$family,$subject){
//        parent::__construct($name,$family);
//        $this -> subject = $subject;
//    }
//    public function greeting(){
//       return parent::greeting() ."im a  {$this -> subject} student" ;
//    }
//}
//
//class Teacher extends Human
//{
//    public $field = "programming";
//
//    public function __construct($name, $family, $field)
//    {
//        parent::__construct($name, $family);
//        $this->field = $field;
//    }
//
//    public function greeting()
//    {
//        return parent::greeting() . " im {$this->field} teacher";
//    }
//}
//
//class Car {
//    public $brand;
//    public $color;
//    public $model;
//
//    public function __construct($brand, $color, $model){
//        $this -> brand = $brand;
//        $this -> color = $color;
//        $this -> model = $model;
//    }
//    public function info(){
//        return "this is {$this -> brand} {$this -> model} in the color of {$this -> color} ";
//    }
//}
//
//
//class SuperCar extends Car {
//    public $zerotoHunderd;
//    public function __construct($brand, $color, $model,$zerotoHunderd){
//        parent::__construct($brand, $color, $model);
//        $this ->zerotoHunderd = $zerotoHunderd;
//    }
//    public function info(){
//        return parent::info(). "this car can do zero to hundred in {$this -> zerotoHunderd} Second";
//    }
//}
//
//class Animal{
//    public $name;
//    public $jens;
//    public $age;
//
//    public function __construct($name,$jens,$age)
//    {
//        $this ->name = $name;
//
//
//    }
//}
//
//
//class Bird extends Animal{
//
//}
//$lamborghini = new Supercar ("lamborghini","red ","aventador","3.9");
//$pride = new Supercar ("pride","white","111","99999999999");
//$armin = new Student("armin","safaie","php");
//$sobhan = new Human("sobhan","akbari");
//$faraz = new Teacher("Faraz", "Nateghi", "programming");
//$eightSerious = new Car("bmw","blue","850i");
//$santafeh = new Car("Hyundai","white","2009");
//
//
//
//
//
//// echo $lamborghini ->info();
//// echo $pride->info();
//// echo $armin ->greeting();
//// echo $santafeh ->info();
//// echo $pride ->info();
//



class Human{
    public $name;
    public $family;
    public $age;
    public $sex;


    public function __construct($name, $family, $age, $sex){
        $this->name = $name;
        $this->family = $family;
        $this->age = $age;
        $this->sex = $sex;
    }
    public function greeting(){


        return "hi my name is {$this ->name} {$this -> family} i am {$this -> age} years old im a {$this -> sex}";

    
    }
}




$armin = new Human("armin","safaie","20","male");


echo $armin->greeting();



for ($i = 0; $i <100 ; $i+=0.5){
    echo $i;
    echo "\n";
}


