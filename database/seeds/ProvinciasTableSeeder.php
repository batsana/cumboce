<?php

use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ( 'provincias' )->insert ([
       'nome' => 'Maputo' 
        ]);
    
         DB::table ( 'provincias' )->insert ([
       'nome'=>'Gaza' 
        ]);

          DB::table ( 'provincias' )->insert ([
       'nome' => 'Ihambane' 
        ]);
    }
}
