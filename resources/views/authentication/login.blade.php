@extends('layouts.main')

@section('main')

<div class="vh-10"></div>

<div class="main-page df jcc aic">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="box">
                    <img src="/rsx/logo/tp_black.png" alt="" class="logo-img" style="width: 200px">

                    <form action="" method="post">
                        @csrf
                        <div class="form-box bs mb-3">
                            <input class="form-control" type="text" name="username" required placeholder="username">
                        </div>
                        <div class="form-box bs mb-3">
                            <input class="form-control" type="password" name="password" required placeholder="password">
                        </div>
                        <button class="amar-btn-outline mb-3 w-100 bs" type="submit">Log In</button>
                        <p class="lead" style="transform: translateY(-130%);">
                            Don't have an account? <a class="link-dark" href="/signup">Signup</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .main-page{
        min-height: 90vh;
    }

    .box{
        border: 1px solid #414042;
        padding: 20px;
        min-height: 40vh;
    }

    .logo-img {
        position: relative;
        transform: translateY(-50%);
        background-color: #f8f8f8; /* Matches the background to crop the border */
        z-index: 1;
    }

    .form-box{
        background-color: #fff;
        /* box-shadow: 0 0 10px rgba(0,0,0,0.1); */
        padding: 10px;
        transform: translateY(-110%);
    }

    .form-control{
        border: none;
        font-size: 1.3rem;
    }

    .form-control:focus{
        border: none;
        box-shadow: none;
    }

    .form-box:focus-within {
        border-bottom: 4px solid #414042;
        padding-bottom: 6px;
    }

    body{
        background-color: #f8f8f8;
    }

    .amar-btn-outline{
        background-color: transparent;
        color: #414042;
        font-size: 1.3rem;
        padding: 20px;
        padding-top: 10px;
        padding-bottom: 15px;
        border: 1px solid #414042;
        margin-right: 10px;
        /* border-radius: 5px; */
        transform: translateY(-110%);
    }

    .amar-btn-outline:hover{
        background-color: #414042;
        color: white;
    }
</style>


@endsection