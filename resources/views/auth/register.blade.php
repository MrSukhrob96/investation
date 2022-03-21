@extends('layouts.app')

@section('content')
<div class="container justify-content-center align-items-center mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-5 border-0 shadow">
                <form method="POST" action="{{ url('register') }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">First Name</label>
                            <input type="text" class="form-control p-2" id="exampleFormControlInput1" name="firstname" placeholder="Alex" @error('firsname') is-invalid @enderror>
                            @error('firsname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Last Name</label>
                            <input type="text" class="form-control p-2" id="exampleFormControlInput1" name="lastname" placeholder="Brown"  @error('lastname') is-invalid @enderror>
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
                            <input type="password" class="form-control p-2" id="exampleFormControlInput1" name="password" placeholder="name@example.com" @error('password') is-invalid @enderror>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Password Confirm</label>
                            <input type="password" class="form-control p-2" id="exampleFormControlInput1" name="password_confirmation" placeholder="name@example.com" @error('password_confirmation') is-invalid @enderror>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary px-4 py-2">Sign up</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection