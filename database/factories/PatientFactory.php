<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'DOB' => $this->faker->date,
            'contact_number' => $this->faker->phoneNumber,
            'emergency_contact_number' => $this->faker->phoneNumber,
            'allergies' => $this->faker->text,
            'medical_conditions' => $this->faker->text,
            'medications' => $this->faker->text,
            'height' => $this->faker->numberBetween(150, 200), // Example for height in cm
            'weight' => $this->faker->numberBetween(50, 100), // Example for weight in kg
            'blood_pressure' => $this->faker->randomElement(['120/80', '130/90', '140/95']), // Example for blood pressure
            'physician_notes' => $this->faker->text,
            // Add more fields here
        ];
    }
}
