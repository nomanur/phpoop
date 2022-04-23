<?php

class QueryBuilder
{
    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        //$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}
