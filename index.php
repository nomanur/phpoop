<?php

require 'function.php';
// try {
//     $pdo = new PDO('mysql:host=127.0.0.1;dbname=ourtodo;', 'root', '123');
// } catch (Exception $e) {
//     var_dump($e->getMessage());
// }

$pdo = connection();
$tasks = selectAll($pdo);

// $statement = $pdo->prepare("select * from todos");

// $statement->execute();

//$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
//$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

require 'index.view.php';
