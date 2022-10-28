<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Manuel';
        $user->lastname = 'Miranda';
        $user->email = 'mfloriano_19@alu.uabcs.mx';
        $user->password = 'password';
        $user->save();
    }
}
