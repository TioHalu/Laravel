@extends('layouts.App')
@section('main')
<div class="mt-5 mx-auto" style="width: 380px">

    <div class="card">
        <div class="card-body">
            <!-- action untuk mengirimkan pada halaman task dengan method post -->
            <form action="{{route('register')}}" method="POST">
                <!-- csrf untuk mengamankan data yang dikirimkan -->
                @csrf 
                <div class="mb-3">
                    <label for="" class="form-label">Nama</label>
                    <!-- menambahkan value dari input old agar inputan terkahir tidak hilang -->
                    <input name="name" type="text" class="form-control" value="{{ old('name')}}">
                    <!-- menambahkan error dibawah textinput jika inputan kosong -->
                     @error('name')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">E-mail</label>
                    <!-- menambahkan value dari input old agar inputan terkahir tidak hilang -->
                    <input name="email" type="email" class="form-control" value="{{ old('email')}}">
                    <!-- menambahkan error dibawah textinput jika inputan kosong -->
                     @error('email')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                
                <div class="mb">
                    <label for="" class="form-label">Password</label>
                    <!-- menambahkan value dari input old agar inputan terkahir tidak hilang -->
                    <input name="password" type="password" class="form-control" value="{{ old('password')}}">
                    <!-- menambahkan error dibawah textinput jika inputan kosong -->
                     @error('password')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>

                 <div class="mb">
                    <label for="" class="form-label">Password Confirmation</label>
                    <!-- menambahkan value dari input old agar inputan terkahir tidak hilang -->
                    <input name="password_confirmation" type="password" class="form-control" >
                 
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection