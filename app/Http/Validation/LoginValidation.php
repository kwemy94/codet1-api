<?php

namespace App\Http\Validation;

class UserValidation
{

    public function rules()
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ];
    }


    public function message()
    {
        return [
            'email.required' => 'Email requis',
            'password.required' => 'Mot de passe requis',
        ];
    }
}
