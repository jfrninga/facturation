<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->name(),
            'email' => $this->unique()->safeEmail(),
            'email_verified_at' => now(),
            'github_id' => $this->github_id(),
            'contact_email' => $this->contact_email(),
            'phone' => $this->phone(),
            'address' => $this->address(),
            'siret' => $this->siret(),
            'ape' => $this->ape(),
            'account_user' => $this->account_user(),
            'domiciliation' => $this->domiciliation(),
            'rib' => $this->rib(),
            'iban' => $this->iban(),
            'bic' => $this->bic(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
