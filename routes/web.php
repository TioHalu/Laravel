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

//membuat halaman task dan edit task 
route::get('tasks/create', [TaskController::class, 'create']);
route::get('tasks/{id}/edit', [TaskController::class, 'edit']);



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
route::get('tasks/{id}', [TaskController::class,'show']);

//mendapatkan data dari query string pada method get

route::get('tasks', [TaskController::class,'index']);

//menggunakan method post dan cara mendapatkan datanya akan mengaktifkan crsf protection app/middelcsrfprotect

route::post('/tasks', [TaskController::class, 'store']);

// //menggunakan method put dan patch dan mendapatkan data update

route::patch('tasks/{id}', [TaskController::class, 'update']);

//menggunakan method delete
route::delete('tasks/{id}', [TaskController::class,'destroy']);



