<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

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

Route::get('/', [Homecontroller::class,'index']);

Route::get('About',function(){
    return view('About');
});

Route::get('Debug',function(){
    $dataarray = [
        'message' => 'hello,world'
    ];
    ddd(request($dataarray));
});



// //method get
// route::get('tasks', function() use($tasklist){
//     return $tasklist;
// });
//dengan parameter
route::get('tasks/{params}', [TaskController::class,'show']);

//mendapatkan data dari query string pada method get

route::get('tasks', [TaskController::class,'index']);

//menggunakan method post dan cara mendapatkan datanya akan mengaktifkan crsf protection app/middelcsrfprotect

route::post('/tasks', [TaskController::class, 'store']);

// //menggunakan method put dan patch dan mendapatkan data

route::patch('tasks/{key}', [TaskController::class, 'update']);

//menggunakan method delete
route::delete('tasks{key', [TaskController::class,'destroy']);