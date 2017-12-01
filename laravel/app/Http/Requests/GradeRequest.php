<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GradeRequest extends FormRequest
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
          'semestre' => 'required|max:2',
          'curso' => 'required',
          'disciplina' => 'required',
          'dia' => 'required',
          'turnos' => 'required',
          'campus' => 'required',
          'bloco' => 'required',
          'sala' => 'required'
        ];
    }

    public function messages() {
        return [
            'semestre.required'=>'O Preechimento do Semestre é obrigatorio',
            'curso.required'=>'O Preechimento do Curso é obrigatorio',
            'disciplina.required'=>'O Preechimento do Disciplina é obrigatorio',
            'dia.required'=>'O Preechimento do Dias de Aula é obrigatorio',
            'turnos.required'=>'O Preechimento do Turno é obrigatorio',
            'campus.required'=>'O Preechimento do Campus é obrigatorio',
            'bloco.required'=>'O Preechimento do Bloco é obrigatorio',
            'sala.required'=>'O Preechimento do Sala é obrigatorio',
        ];
}
