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
        return false;
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
            "phone" => "required|max:15|min:6",
            "patronymic" => "required",
            "birthday" => "required|date",
            "reference" => "required",
            "email"=> "required|email",
            "password"=> "required|max:50|min:6",
            "password_confirm"=> "required|some:password"
        ];
    }
}
