<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampusRequests extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'campus_nome' => 'required|max:100',
            'campus_logradouro' => 'required',
            'campus_complemento' => 'required',
            'campus_cidade' => 'required',
            'campus_uf' => 'required',

        ];
    }

    public function messages() {
        return [
            
            'campus_nome.required'=>'O Preechimento do Campus é obrigatorio',
            'campus_logradouro.required'=>'O Preechimento do Logradouro é obrigatorio',
            'campus_complemento.required'=>'O Preechimento do Complemento é obrigatorio',
            'campus_cidade.required'=>'O Preechimento do Cidade é obrigatorio',
            'campus_uf.required'=>'O Preechimento do UF é obrigatorio',

            
        ];

    }

}