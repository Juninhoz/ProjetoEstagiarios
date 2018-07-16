<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstagiariosRequest extends FormRequest
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
            'nome' => 'required',
            'email' => 'required',
            'horario_id' => 'required',
            'setor_id' => 'required',
            'status_id' => 'required',
            'instituicao_id' => 'required|numeric',
            'curso_id' => 'required|numeric',
            'data_contrato' => 'required',
            'telefone' => 'required'
        ];
    }
}
