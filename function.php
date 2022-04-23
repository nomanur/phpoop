<?php

function connection()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=ourtodo;', 'root', '123');
    } catch (Exception $e) {
        var_dump($e->getMessage());
    }
}

function selectAll($pdo)
{
    $statement = $pdo->prepare("select * from todos");

    $statement->execute();

    //$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $statement->fetchAll(PDO::FETCH_OBJ);
}
