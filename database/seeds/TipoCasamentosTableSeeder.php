<?php

use Illuminate\Database\Seeder;

class TipoCasamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB:: table ( 'tipo_casamentos' )->insert ([
       'nome' => 'Comunhao de bens' 
        ]);

         DB:: table ( 'tipo_casamentos' )->insert ([
       'nome' => 'Separacao de bens' 
        ]);

          DB:: table ( 'tipo_casamentos' )->insert ([
       'nome' => 'Bens declarados' 
        ]);
    }
}
