@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10 col-12">
            <form class="card p-5 border-0 shadow" method="POST" action="{{ url('register') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1">First Name</label>
                    <input type="text" class="form-control p-2" id="exampleFormControlInput1" name="firstname" placeholder="Alex" @error('firsname') is-invalid @enderror>
                    @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1">Last Name</label>
                    <input type="text" class="form-control p-2" id="exampleFormControlInput1" name="lastname" placeholder="Brown" @error('lastname') is-invalid @enderror>
                    @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1">Patronymic</label>
                    <input type="text" class="form-control p-2" id="exampleFormControlInput1" name="patronymic" placeholder="" @error('patronymic') is-invalid @enderror>
                    @error('patronymic')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1">Phone</label>
                    <input type="text" class="form-control p-2" id="exampleFormControlInput1" name="phone" placeholder="Brown" @error('phone') is-invalid @enderror>
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1">Birthday</label>
                    <input type="date" class="form-control p-2" id="exampleFormControlInput1" name="birthday" placeholder="1996.11.11" @error('birthday') is-invalid @enderror>
                    @error('birthday')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1">Reference</label>
                    <input type="text" class="form-control p-2" id="exampleFormControlInput1" name="reference" placeholder="123456" @error('reference') is-invalid @enderror>
                    @error('reference')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="text" class="form-control p-2" id="exampleFormControlInput1" name="email" placeholder="useremail@example.com" @error('email') is-invalid @enderror>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1">Password</label>
                    <input type="password" class="form-control p-2" id="exampleFormControlInput1" name="password" placeholder="*********" @error('password') is-invalid @enderror>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1">Password Confirm</label>
                    <input type="password" class="form-control p-2" id="exampleFormControlInput1" name="password_confirm" placeholder="*********" @error('password_confirmation') is-invalid @enderror>
                    @error('password_confirm')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <a href="{{ url('login') }}" class="float-right">If you are have account?</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary px-4 py-2"  >Sign up</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection