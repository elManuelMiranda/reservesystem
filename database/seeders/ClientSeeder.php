<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Manuel',
            'lastname' => 'Miranda',
            'email' => 'mfloriano_19@alu.uabcs.mx',
            'phone_number' => '6122000289',
        ]);
    }
}
