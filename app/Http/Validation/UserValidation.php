<?php 

namespace App\Http\Validation;

class UserValidation {

    public function rules() {
      return   [
            'name' => 'required',
            'phone' => 'required|unique:users',
            'email' => 'required|unique:users',
            'association_id' => 'required',
        ];
    }


    public function message() {
        return [
            'name.required' => 'Nom requis',
            'phone.required' => 'Numéro de téléphone requis',
            'phone.unique' => 'Numéro de téléphone existe déjà',
            'email.required' => 'Adresse email requise',
            'email.unique' => 'Adresse email existe déjà',
            'association_id' =>"Choisir une association"
        ];
    }
}
