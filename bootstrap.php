<?php

$config = require 'config.php';
require 'Database/Connection.php';
require 'Database/QueryBuilder.php';

$pdo = Connection::make($config['database']);
$query = new QueryBuilder($pdo);
