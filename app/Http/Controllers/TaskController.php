<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\task;
use function PHPUnit\Framework\returnSelf;

class TaskController extends Controller
{
    private $tasklist = [
    'first' => 'sleep',
    'second' => 'eat',
    'third' => 'work'
    ];

    public function index(Request $request){
        if($request->search){
         $tasks = Task::where('task','LIKE',"%$request->search%")//mencari dengna kata kunci di seluruh data colum task dengn operator LIKE sesuar kata kunci "search=key" dengan model mvc
         ->get();
        
         return $tasks;
        }

        $tasks = Task::all();
        return view('tasks.index',[
            'data'=> $tasks //menampilkan data pada foldes tasks.index disimpan dalam array dengan tiap index dengan nama variable'data'
        ]);
    }

       //Membuat Halaman Create 
    public function create(){
        return view('tasks.create');//folder dengan nama task dan dile create.blade.php
    }
    //membuat halaman edit
    public function edit($id){
        return view('tasks.edit');
    }




    public function show($id){
        $task=Task::find($id);//mendapatkan menampilkan data dengan id dengan model mvc
        return $task;
    }
    //method post 
    public function store(Request $request){
    Task::create([
        'task'=> $request->task,//menambahkan data dari request milih task dan user dengan model mvc
        'user'=>$request->user
       ]);
       return 'success';
    }

    //method patch
    public function update(Request $request,$id){
       $task = Task::find($id);
       $task->update([//mengubah data dengan model mvc
           'task'=>$request->task,
           'user'=>$request->user
       ]);
       return $task;
    }

    //Method delete

    public function destroy($id){
      $task = Task::find($id);
      $task->delete();
      
        return 'success';//menghapus data pada dengan model mvc
    }



 
}



