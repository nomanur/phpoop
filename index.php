<?php

require 'core/bootstrap.php';
//require 'function.php';

$router = new Router();

require 'Routes.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');


$tasks = $query->selectAll('todos');

require $router->direct($uri);
//require 'index.view.php';


//var_dump(($_SERVER['REQUEST_METHOD']));

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

// interface InterTest
// {
//     public function testinter(array $t, string $r, bool $s);
// }


// class Inter implements InterTest
// {

//     public function testinter(array $t, string $r, bool $s)
//     {
//         var_dump($t);
//     }
// }


// $obj = new Inter();

// $obj->testinter(['111'], 'dddd', true);


//method chaining

// class M
// {

//     public $p;
//     public $s;

//     public function a()
//     {
//         $this->p = "first";

//         return $this;
//     }

//     public function b()
//     {
//         $this->s = "second";

//         return $this;
//     }

//     public function c()
//     {
//         echo $this->p . ' and ' . $this->s;
//     }
// }

// $obj = new M();

// $obj->a()->b()->c();


// class Teststatic
// {
//     public static $p;
//     public static $s;

//     public static function a()
//     {
//         self::$p = "first static";

//         return new self;
//     }

//     public static function b()
//     {
//         self::$s = "second static";

//         return new self;
//     }

//     public static function c()
//     {
//         echo self::$p . ' and ' . self::$s;
//     }
// }

// Teststatic::a()->b()->c();

// class E
// {
//     public $v;

//     public function __construct($a)
//     {
//         $this->v = $a;
//     }
// }


// class F extends E
// {
//     public function __construct($n)
//     {
//         parent::__construct($n);
//     }


//     public function show()
//     {
//         echo $this->v;
//     }
// }

// $obj = new F("john");

// $obj->show();
