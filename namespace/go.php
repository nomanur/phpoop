<?php
require 'index.php';

use App\Go as AnotherGo;
use App\Gosecond;

AnotherGo::going();
echo "<br>";
Gosecond::going();

class Go
{
    public static function another()
    {
        echo "i am going from go";
    }
}

// Go::another();
