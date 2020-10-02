<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'nama' => ['required', 'min:3', 'max:50', 'string'],
            'password' => ['required', 'min:8', 'alpha_num'],
            'fakultas' => ['required', 'max:50', 'string'],
            'jurusan' => ['required', 'max:50', 'string'],
            'no_hp' => ['integer'],
            'no_wa' => ['integer'],
        ];
    }
}
