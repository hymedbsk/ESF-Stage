<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StageRequest extends FormRequest
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
            'nom' => 'required|min:2|max:100|alpha',
            'prenom' => 'required|min:2|max:100|alpha',
            'poste' => 'required|max:300',
            'email' => 'required|email',
            'cv' => 'required',
            'lm' => 'required',
            'afs' => 'required'

        ];
    }
}
