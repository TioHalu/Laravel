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

    public function index(){
        if (request()->search){//jika didalam request memilki nilai dari  keyword search
        return $this->tasklist[request() -> search];
    }
    return $this->tasklist;
    }

    public function show($params){
        return $this->tasklist[$params];
    }
}
