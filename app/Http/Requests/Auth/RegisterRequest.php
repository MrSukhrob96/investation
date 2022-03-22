<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "firstname" => "required|max:25|min:3",
            "lastname" => "required|max:25|min:3",
            "patronymic" => "required",
            "phone" => "required|max:15|min:6",
            "birthday" => "required",
            "reference" => "required",
            "email" => "required|email|unique:users",
			"password" => "required",
			"password_confirm" => "required|same:password"
        ];
    }
}
