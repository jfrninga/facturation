<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterUserForm extends FormRequest
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
            'github_id' => [ 'integer'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('user')],
            'contact_email' => ['required', 'email', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'ape' => ['required', 'integer', 'max:255'],
            'siret' => ['required', 'integer', 'max:255'],
            'account_user' => ['required', 'string', 'max:255', Rule::unique('user')],
            'domiciliation' => ['required', 'string', 'max:255'],
            'rib' => ['required', 'string', 'max:255', Rule::unique('user')],
            'iban' => ['required', 'string', 'max:255', Rule::unique('user')],
            'bic' => ['required', 'string', 'max:255', Rule::unique('user')],
        ];
    }
}
