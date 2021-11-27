@extends('layouts.App')
@section('main')
<div class="mt-5 mx-auto" style="width: 380px">

    <div class="card">
        <div class="card-body">
            <!-- penulisan url harus dengan petik 2 -->
            <form action="{{ url("/tasks/$task->id")}}" method="POST">
            <!-- mengamankan post dengn csrf -->
            @csrf
            <!-- membuat mtehod patch agar _method dapat diaktifkan -->
            @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label">User</label>
                    <input name="user" type="text" class="form-control" value="{{ $task->user }}">
                    <!-- menambahkan error dibawah textinput jika inputan kosong -->
                    @error('user')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Task</label>
                    <textarea name="task" class="form-control" id="" rows="3" >{{ $task->task }}</textarea>
                    <!-- menambahkan error dibawah textinput jika inputan kosong -->
                     @error('task')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection