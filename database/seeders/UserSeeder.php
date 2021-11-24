<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'oficial_name' => $this->faker->name(),
            'userid' => $this->faker->bothify('?###??##'),
            'national_id' => $this->faker->numerify('##########'),
            'phone_number' => $this->faker->phoneNumber(),
            'dob'=> $this->faker->date(),
            'residence' => $this->faker->streetName(),
            'status'=>'1',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
