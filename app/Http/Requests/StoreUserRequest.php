<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
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
            'user_id' => [ 'integer'],
            'name_entreprise' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('client')],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'ref' => ['required', 'string', 'max:255'],
            'siret' => ['required', 'string', 'max:255'],
        ];
    }
}
