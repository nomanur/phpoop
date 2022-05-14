<?php

require '../vendor/autoload.php';

use Carbon\Carbon;

date_default_timezone_set('Asia/Dhaka');


// echo date('h:i:s y-F-j-l-L');

//$date = new DateTime("+1 Year");

// $date = Date("Y:m:d H:i:s");
// $currentdate = new DateTime($date);

// $olddate = new DateTime('2019-03-16 13:02:42');

//$currentdate = $date->format('h:i:s y-F-j-l-L');

// $in = ($olddate->diff($currentdate));

//print_r($in);

// echo $in->y . 'm ' . $in->m;


echo Carbon::now()->addday(-2);

// if (Carbon::now()->addday(1)->isWeekend()) {
//     echo 'Party!';
// }
