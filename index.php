<?php

require 'bootstrap.php';
//require 'function.php';


$tasks = $query->selectAll('todos');

require 'index.view.php';


// var_dump(trim($_SERVER['REQUEST_URI'], '/'));


// class Test
// {
//     public $uri = [
//         'about' => 'test'
//     ];

//     public static function testArray()
//     {
//         $test = new self;
//         return array_key_exists('about', $test->uri);
//     }
// }

// $t = Test::testArray();

// var_dump($t);

// $array = ['one' => 1, 'two' => 2];

// $a = array_key_exists('ones', $array);

// var_dump($a);

// trait testTrait
// {
//     public $testTrait = "test trait";

//     public function traitfunction()
//     {
//         echo 'this is trait';
//     }
// }

// trait testTraitTwo
// {
//     public $testTrait2 = "test trait2";

//     public function traitfunction2()
//     {
//         echo 'this is trait2';
//     }
// }


// class abs
// {
//     use testTrait, testTraitTwo;
//     //use testTraitTwo;
// }

// $abs = new abs();

// // echo $abs->traitfunction();
// // echo $abs->traitfunction2();


// class second
// {
//     use testTraitTwo;
// }


// abstract class TestingAbs
// {
//     abstract public function test($uri);
// }

// class TestAbstract extends TestingAbs
// {
//     public function test($abc)
//     {
//         return "this is abs";
//     }
// }

// $ab = new TestAbstract();
