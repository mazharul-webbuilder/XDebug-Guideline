<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   echo sum(10, 10);
});

function sum($a, $b)
{
    return $a + $b;
}
