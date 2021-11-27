@extends('layouts.App')
@section('main')
<div class="mt-5 mx-auto" style="width: 380px">

    <div class="card">
        <div class="card-body">
            <!-- memberikan pesan status sukse jika berahsail -->
            @if (session('status'))
                <div class="aler alert-success">
                    {{session('status')}}
                </div>
            @endif
            <form action="{{route('password.email')}}" method="POST">
                <!-- csrf untuk mengamankan data yang dikirimkan -->
                @csrf 
                
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
                
                

                
                <button type="submit" class="btn btn-primary">Send Reset</button>
            </form>
        </div>
    </div>
</div>
@endsection