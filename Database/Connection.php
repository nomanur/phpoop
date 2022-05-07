<?php

class Connection
{
    public static function make($config)
    {
        try {
            // return new PDO('mysql:host=127.0.0.1;dbname=ourtodo;', 'root', '123');

            return new PDO(
                'mysql:host=' . $config['host'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password']
            );
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}
