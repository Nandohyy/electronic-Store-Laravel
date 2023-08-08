@extends('layouts.app')

@section('content')
<div class="container mt-5" style="padding-top: 20px;">
    <div class="row justify-content-center" style="padding-bottom: 60px;">
        <div class="col-md-6" >
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Masuk</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" style="padding-bottom: 20px;">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Kata Sandi</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="text-right mb-3">
                                <a href="{{ route('password.request') }}">Lupa Password?</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                        <div class="form-group text-center">
                            <p>Belum Punya Akun? <a href="{{ route('register') }}">Daftar Disini</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
