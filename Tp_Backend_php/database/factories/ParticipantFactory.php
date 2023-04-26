<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Region>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "CNI"=> "CNI".Str::random(15),
            "nom" =>$this -> faker ->lastName,
            "prenom" => $this -> faker ->firstName,
            "age" => rand(21,100),
            "etat" => rand(0, 1),
            "id_region" => rand(1,20),
            "login" => Str::random(10),
            "mdp" => Str::random(10),
            "email" => $this -> faker ->email,
            "telephone" =>$this -> faker ->phoneNumber,
        ];
    }
}
