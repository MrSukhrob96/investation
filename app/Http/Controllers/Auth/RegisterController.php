<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            "firstname" => ["required", "max:25", "min:3"],
            "lastname" => ["required", "max:25", "min:3"],
            "phone" => ["required", "max:15", "min:6"],
            "patronymic" => ["required", "max:15", "min:6"],
            "birthday" => ["required"],
            "reference" => ["required"],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            "password" => ["required"],
			"password_confirm" => ["required", "same:password"]
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'patronymic' => $data['patronymic'],
            'phone' => $data['phone'],
            'birthday' => $data['birthday'],
            'reference' => $data['reference'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

}
