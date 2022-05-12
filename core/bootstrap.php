<?php

$config = require 'config.php';
require 'core/Database/Connection.php';
require 'core/Database/QueryBuilder.php';
require 'core/Router.php';

$pdo = Connection::make($config['database']);
$query = new QueryBuilder($pdo);
