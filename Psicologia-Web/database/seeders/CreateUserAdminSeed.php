<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserAdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'rules_id' => 1,
                'user_id' => null,
                'email' => 'admin@admin',
                'password' => Hash::make('123')
            ],
            [
                'name' => 'psicologo 1',
                'rules_id' => 2,
                'user_id' => null,
                'email' => 'psi1@psi',
                'password' => Hash::make('123')
            ],
            [
                'name' => 'psicologo 2',
                'rules_id' => 2,
                'user_id' => null,
                'email' => 'psi2@psi',
                'password' => Hash::make('123')
            ],
            [
                'name' => 'atendente',
                'rules_id' => 3,
                'user_id' => null,
                'email' => 'atendente@atendente',
                'password' => Hash::make('123')
            ]
        ]);
    }
}
