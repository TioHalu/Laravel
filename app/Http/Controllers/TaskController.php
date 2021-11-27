<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    private $tasklist = [
    'first' => 'sleep',
    'second' => 'eat',
    'third' => 'work'
    ];

    public function index(Request $request){
        if ($request->search){//jika didalam request memilki nilai dari  keyword search
        return $this->tasklist[$request -> search];
    }
    return $this->tasklist;
    }

    public function show($params){
        return $this->tasklist[$params];
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
    public function update(Request $request,$key){
        $this->tasklist[$key] = $request->task;
        return $this->tasklist;
    }

    //Method delete

    public function destroy($key){
        unset($this->tasklist[$key]);
        return $$this->tasklist;
    }
}
