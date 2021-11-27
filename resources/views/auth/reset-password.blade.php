@extends('layouts.App')
@section('main')
<div class="mt-5 mx-auto" style="width: 380px">

    <div class="card">
        <div class="card-body">
            <!-- action untuk mengirimkan pada halaman task dengan method post -->
            <form action="{{route('password.update')}}" method="POST">
                <!-- csrf untuk mengamankan data yang dikirimkan -->
                @csrf 
                <!-- token untuk reset password -->
                <input type="hidden" name="token" value="{{$request->route('token')}}">
               
                <div class="mb-3">
                    <label for="" class="form-label">E-mail</label>
                    <!-- menambahkan value dari input old agar inputan terkahir tidak hilang -->
                    <input name="email" type="email" class="form-control" value="{{ old('email', $request->email)}}">
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
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </form>
        </div>
    </div>
</div>
@endsection