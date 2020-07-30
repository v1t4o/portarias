<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique',
            "codpes" => "exclude_unless:codigo_vigia,null,|required|unique|codpes",
            "codigo_vigia" => 'exclude_unless:codpes,null,|required|unique',
        ]; 
    }
}
