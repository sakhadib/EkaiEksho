@extends('layouts.main')

@section('main')

<div class="vh-10"></div>

<div class="main-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-6">
                    Here you can provide resources to the community
                </h1>
                <p class="lead">
                    The resources you provide must be free or you must have the right to distribute them. Please do not promotion
                    with any paid resources. And we do not support piracy or plagiarism.
                </p>
            </div>
        </div>
        <form action="">
            @csrf
            <div class="row mt-4">
                <div class="col-12">
                    <div class="form-box mb-3 bs">
                        <input class="form-control" type="text" name="title" required placeholder="Title of your resource">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <div class="form-box mb-3 bs">
                        <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                            <option selected>What type of resource is this ?</option>
                            @foreach($content_types as $type)
                                <option value="{{ $type->id }}" style="color:{{$type->TypeColor}};">{{ $type->TypeName }}</option>
                            @endforeach
                        </select>                    
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</div>




<style>
    .main-page{
        min-height: 90vh;
    }

    body{
        background-color: #fafafa;
    }
</style>

@endsection