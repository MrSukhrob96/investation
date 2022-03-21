@extends('layouts.app')

@section('content')
<div class="container justify-content-center align-items-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-5 border-0 shadow">
                <form>
                    <div class="form-row">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control p-2" id="exampleFormControlInput1" placeholder="name@example.com" @error('password') is-invalid @enderror>
                            @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Surname</label>
                            <input type="text" class="form-control p-2" id="exampleFormControlInput1" placeholder="name@example.com">
                            @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Patronymic</label>
                            <input type="text" class="form-control p-2" id="exampleFormControlInput1" placeholder="name@example.com" @error('password') is-invalid @enderror>
                            @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Birthday</label>
                            <input type="date" class="form-control p-2" id="exampleFormControlInput1" placeholder="name@example.com" @error('password') is-invalid @enderror>
                            @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Reference</label>
                            <input type="text" class="form-control p-2" id="exampleFormControlInput1" placeholder="name@example.com" @error('password') is-invalid @enderror>
                            @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="text" class="form-control p-2" id="exampleFormControlInput1" placeholder="name@example.com" @error('password') is-invalid @enderror>
                            @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Password</label>
                            <input type="text" class="form-control p-2" id="exampleFormControlInput1" placeholder="name@example.com" @error('password') is-invalid @enderror>
                            @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Password Confirm</label>
                            <input type="text" class="form-control p-2" id="exampleFormControlInput1" placeholder="name@example.com" @error('password') is-invalid @enderror>
                            @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection