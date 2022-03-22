@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6 col-md-8 col-sm-10">
            @empty($errors)
                error
            @endif
            <form class="card p-5 border-0 shadow" method="POST" action="{{ url('login') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1 pb-3">Email</label>
                    <input type="email" class="form-control p-2" id="exampleFormControlInput1" placeholder="name@example.com" @error('email') is-invalid @enderror name="email">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1 pb-3">Password</label>
                    <input type="password" name="password" class="form-control p-2" id="exampleFormControlInput1" placeholder="alex@example.com" @error('password') is-invalid @enderror>
                </div>
                <div class="form-group mb-3">
                    <a href="{{ url('register') }}" class="float-right">If you have'not account?</a>
                </div>
                <div class="form-group mb-3">
                    <button class="btn btn-primary px-4 py-2">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection