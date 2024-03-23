<?php 

namespace App\Http\Validation;

class AssociationValidation {

    public function rules() {
      return   [
            'name' => 'required|unique:associations',
            'town' => 'required',
        ];
    }


    public function message() {
        return [
            'name.required' => 'le nom est requis',
            'name.unique' => 'Ce nom d\'association existe déjà',
            'town.required' => 'Le champ ville est obligatoire',
        ];
    }
}
