<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the users is authorized to make this request.
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
            'name' => ['required', 'string', 'max:191'],
            'contact_email' => ['required', 'email', 'max:191'],
            'phone' => ['required', 'string', 'max:191'],
            'address' => ['required', 'string', 'max:191'],
            'siret' => ['required', 'string', 'max:191'],
            'ape' => ['required', 'string', 'max:191'],
            'account_user' => ['required', 'string', 'max:191'],
            'domiciliation' => ['required', 'string', 'max:191'],
            'rib' => ['required', 'string', 'max:191'],
            'iban' => ['required', 'string', 'max:191'],
            'bic' => ['required', 'string', 'max:191'],
        ];
    }
}
