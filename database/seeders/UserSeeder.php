<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($start = 0; $start < 1000000; $start++)
        {
            $email = fake()->email();

            User::firstOrCreate([
                'email' => $email,
            ], [
                'FirstName' => fake()->firstName(),
//                'MiddleName' => fake()->(),
                'LastName' => fake()->lastName(),
                'Phone' => fake()->phoneNumber(),
//                'Photo' => fake()->avatar(),
            ]);

            dump($start + 1);
        }
    }
}
