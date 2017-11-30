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
}
