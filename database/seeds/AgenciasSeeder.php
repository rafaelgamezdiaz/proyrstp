<?php

use Illuminate\Database\Seeder;

class AgenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agencias')->insert([
        	'user_id' => 1,
        	'nombre' => 'Agencia Propietario'
        	]);
        DB::table('agencias')->insert([
            'user_id' => 3,
            'nombre' => 'Agencia Demanda'
            ]);
        DB::table('agencias')->insert([
            'user_id' => 2,
            'nombre' => 'Agencia Profesional'
            ]);
    }
}
