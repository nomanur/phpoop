<?php

require 'bootstrap.php';
require 'function.php';

$tasks = $query->selectAll('todos');

require 'index.view.php';
