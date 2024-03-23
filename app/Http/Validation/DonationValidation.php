<?php 

namespace App\Http\Validation;

class DonationValidation {

    public function rules() {
      return   [
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'amount' => 'required|numeric',
        ];
    }


    public function message() {
        return [
            'last_name.required' => 'Nom du donateur requis',
            'phone.required' => 'Numéro de téléphone obligatoire',
            'email.required' => 'Adresse email requise',
            'email.email' => 'Adresse email invalide',
            'amount.required' => 'Le prix de la carte est requis',
            'amount.numeric' => 'Le prix de la carte doit être un nombre',
        ];
    }
}
