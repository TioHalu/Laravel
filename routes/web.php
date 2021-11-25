<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('About',function(){
//     return view('About');
// });

// Route::get('Debug',function(){
//     $dataarray = [
//         'message' => 'hello,world'
//     ];
//     ddd(request($dataarray));
// });


//menggunakan method get dan parameter route
$tasklist = [
    'first' => 'sleep',
    'second' => 'eat',
    'third' => 'work'
];
//method get
route::get('tasks', function() use($tasklist){
    return $tasklist;
});
//dengan parameter
route::get('tasks/{params}', function($params) use($tasklist){
    return $tasklist[$params];
});
