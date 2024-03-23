<?php 

namespace App\Http\Validation;

class CardValidation {

    public function rules() {
      return   [
            'title' => 'required|unique:cards',
            'description' => 'required',
            'amount' => 'required|numeric',
        ];
    }


    public function message() {
        return [
            'title.required' => 'le titre est requis',
            'title.unique' => 'Une carte existe déjà avec ce titre',
            'amount.required' => 'Le prix de la carte est requis',
            'amount.numeric' => 'Le prix de la carte doit être un nombre',
        ];
    }
}
