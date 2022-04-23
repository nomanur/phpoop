<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=ourtodo;', 'root', '123');
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}
