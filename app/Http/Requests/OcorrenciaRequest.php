<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Ocorrencia;

use Illuminate\Validation\Rule;

class OcorrenciaRequest extends FormRequest
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
        $ocorrencia = new Ocorrencia;
        return [
            'patrimonio' => '',
            'data_ocorrencia' => 'required',
            'numero_serie' => '',
            'tipo' => ['required',Rule::in($ocorrencia->tipos())],
            'comentario' => '',
        ];
    }
}
