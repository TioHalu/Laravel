@extends('layouts.App')
@section('main')
<div class="mt-5 mx-auto" style="width: 380px">

    <div class="card">
        <div class="card-body">
            <!-- action untuk mengirimkan pada halaman task dengan method post -->
            <form action="{{url('/tasks')}}" method="POST">
                <!-- csrf untuk mengamankan data yang dikirimkan -->
                @csrf 
                <div class="mb-3">
                    <label for="" class="form-label">User</label>
                    <!-- menambahkan value dari input old agar inputan terkahir tidak hilang -->
                    <input name="user" type="text" class="form-control" value="{{ old('user')}}">
                    <!-- menambahkan error dibawah textinput jika inputan kosong -->
                     @error('user')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Task</label>
                    <!-- menambahkan value dari input old agar inputan terkahir tidak hilang -->
                    <textarea name="task" class="form-control" id="" rows="3">{{ old('task')}}</textarea>
                    <!-- menambahkan error dibawah textinput jika inputan kosong -->
                     @error('task')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection