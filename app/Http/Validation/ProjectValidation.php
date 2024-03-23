<?php 

namespace App\Http\Validation;

class ProjectValidation {

    public function rules() {
      return   [
            'title' => 'required',
            'description' => 'required',
        ];
    }


    public function message() {
        return [
            'title.required' => 'Titre du projet requis',
            'description.required' => 'Description requise',
        ];
    }
}
