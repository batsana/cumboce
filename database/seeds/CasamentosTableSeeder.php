<?php

use Illuminate\Database\Seeder;

class CasamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ( 'casamentos' )->insert ([
       'tipoCasamento_id' => '1' ,
       'ano_inicio'=>'22/11/2000',
       'esposa_id'=>'1',
       'esposo_id'=>'2'
        ]);
    }
}
