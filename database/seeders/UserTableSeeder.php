<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->make([
            'name' => 'Administrador',
            'email' => 'user@vivereplus.com',
            'password' => 'vivereplus@123'
        ]);
    }
}
