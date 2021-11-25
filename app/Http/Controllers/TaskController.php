<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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
         // return request()->all();
        $this->tasklist[$request->label]=$request->task;// seperti atribut name pada input
        return $this->tasklist;
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
