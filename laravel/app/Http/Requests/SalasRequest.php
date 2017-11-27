<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'nome'=>'required|max:500',
          'descricao'=>'required|max:3000',
          'campus'=>'required',
          'bloco'=>'required',
        ];
    }
    public function messages()
    {
      return [
         'nome.required'=>'Nome da sala é obrigatorio',
         'descricao.required'=>'Descrição é obrigatorio',
         'campus.required'=>'Campus é obrigatorio',
         'bloco.required'=>'Bloco é obrigatorio',
      ];
    }
}
