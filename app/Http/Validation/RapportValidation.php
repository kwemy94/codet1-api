<?php 

namespace App\Http\Validation;

class RapportValidation {

    public function rules() {
      return   [
            'title' => 'required',
            'description' => 'required',
        ];
    }


    public function message() {
        return [
            'title.required' => 'Titre du rapport requis',
            'description.required' => 'Description requise',
        ];
    }
}
