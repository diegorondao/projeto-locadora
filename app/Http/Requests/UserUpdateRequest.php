<?php

namespace Locadora\Http\Requests;

use Locadora\Http\Requests\Request;

class UserUpdateRequest extends Request
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
        
        'email' => 'required|unique:users|max:30',
        'nome' => 'required|max:15',
        
        ];
    }
}
