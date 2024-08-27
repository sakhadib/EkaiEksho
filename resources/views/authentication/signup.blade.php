@extends('layouts.main')

@section('main')

<div class="vh-10"></div>

<div class="main-page df jcc aic">
    <div class="container">
        <div class="row">
            <div class="col-md-6 df jcc aic">
                <img src="rsx/logo/tp_black.png" alt="" style="width: 70%">
            </div>
            <div class="col-md-5 offset-md-1 df dfc jcc">
                <div class="row">
                    <div class="col-12">
                        <h1 class="display-5">Welcome to muktobidya</h1>
                        <p class="lead">Here starts your great journey of self-learning.</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <form action="/signup" method="post">
                            @csrf
                            <div class="form-box mb-3 bs">
                                <input class="form-control" type="text" name="username" required placeholder="Username" value="{{ old('username') }}">
                                @error('username')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-box mb-3 bs">
                                <input class="form-control" type="email" name="email" required placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-box mb-3 bs">
                                <input class="form-control" type="text" name="FullName" required placeholder="Full Name" value="{{ old('FullName') }}">
                                @error('FullName')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-box mb-3 bs">
                                <input class="form-control" type="password" name="password" required placeholder="Password">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-box mb-3 bs">
                                <input class="form-control" type="password" name="conform_password" required placeholder="Confirm Password">
                                @error('conform_password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button class="amar-btn-outline mb-3 w-100" type="submit">Signup</button>
                            <p class="lead">
                                Already have an account? <a class="link-dark" href="/login">Login</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #fafafa;
    }
    .main-page {
        min-height: 90vh;
    }
    .form-box {
        background-color: #fff;
        padding: 10px;
    }
    .form-control {
        border: none;
        font-size: 1.3rem;
    }
    .form-control:focus {
        border: none;
        box-shadow: none;
    }
    .amar-btn {
        background-color: rgb(225, 225, 225);
        color: #414042;
        font-size: 1.3rem;
        padding: 20px;
        padding-top: 10px;
        padding-bottom: 15px;
        border: none;
        margin-right: 10px;
    }
    .amar-btn:hover {
        background-color: #414042;
        color: white;
    }
    .amar-btn-outline {
        background-color: transparent;
        color: #414042;
        font-size: 1.3rem;
        padding: 20px;
        padding-top: 10px;
        padding-bottom: 15px;
        border: 1px solid #414042;
        margin-right: 10px;
    }
    .amar-btn-outline:hover {
        background-color: #414042;
        color: white;
    }
    .form-box:focus-within {
        border-bottom: 4px solid #414042;
        padding-bottom: 6px;
    }
    .text-danger {
        font-size: 0.9rem;
    }
</style>

@endsection
