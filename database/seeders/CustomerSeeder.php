<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        Customer::create([
            'name' => 'Customer 1',
            'email' => 'customer@example.com',
            'phone' => '0123456789',
            'sex' => 'male',
            'password' => Hash::make('123456'),
        ]);
    }
}
