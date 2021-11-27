<?php

namespace App\Http\Controllers;

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
         $tasks = DB::table('task')
         ->where('task','LIKE',"%$request->search%")//mencari dengna kata kunci di seluruh data tabel task dengn operator LIKE sesuar kata kunci 
         ->get();
         return $tasks;
        }
    
        $tasks = DB::table('task')->get();//menampilkan data
        return $tasks;
    }

    public function show($id){
        $task = DB::table('task')->where('id',$id)->first();//mendapatkan menampilkan data dengan id
        ddd($task);//menampilkan data dengan dump,die,debug
    }
    //method post 
    public function store(Request $request){
       DB::table('task')->insert([
        'task'=> $request->task,//mendapatkan data dari request milih task dan user
        'user'=>$request->user
       ]);
       return 'success';
    }

    //method patch
    public function update(Request $request,$id){
       $task = DB::table('task')->where('id',$id)->update([//mengubah data dengan query builder
           'task'=>$request->task,
           'user'=>$request->user
       ]);
       return 'success';
    }

    //Method delete

    public function destroy($key){
        unset($this->tasklist[$key]);
        return $$this->tasklist;
    }
}
