<?php

require 'Database/Connection.php';
require 'Database/QueryBuilder.php';
require 'function.php';

$pdo = Connection::make();
$query = new QueryBuilder($pdo);
$tasks = $query->selectAll('todos');


require 'index.view.php';
