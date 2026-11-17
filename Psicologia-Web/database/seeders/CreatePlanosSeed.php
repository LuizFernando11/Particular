<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class CreatePlanosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planos')->insert([
            [
                'nome' => 'Particular psc1',
                'descricao' => 'Voltado a clientes pagando por conta propria',
                'valor' => 100.00,
                'user_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'UNIMED pcs1',
                'descricao' => 'Voltado a clientes com guias da unimed',
                'valor' => 75.00,
                'user_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'Particular psc2',
                'descricao' => 'Voltado a clientes pagando por conta propria',
                'valor' => 100.00,
                'user_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'UNIMED pcs2',
                'descricao' => 'Voltado a clientes com guias da unimed',
                'valor' => 75.00,
                'user_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
