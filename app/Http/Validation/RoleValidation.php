<?php 

namespace App\Http\Validation;

class RoleValidation {

    public function rules() {
      return   [
            'name' => 'required|unique:roles',
        ];
    }


    public function message() {
        return [
            'name.required' => 'nom du role requis',
            'name.unique' => 'Ce role existe déjà',
        ];
    }
}
