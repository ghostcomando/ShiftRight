<?php

namespace TurnosPonal\Http\Requests;

use TurnosPonal\Http\Requests\Request;

class TipoUserRequest extends Request
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
            'tipoUsuario' => 'required',
        ];
    }
}
