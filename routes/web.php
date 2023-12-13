<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   echo sum(10, 'string');
});

function sum($a, $b)
{
    return $a + $b;
}
