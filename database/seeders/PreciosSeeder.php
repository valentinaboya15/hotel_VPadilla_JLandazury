<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PreciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $precio=[
            [
                'Tipo'=>'suite',
                'precio'=>250000,
            ],
            [
                'Tipo'=>'Sencilla',
                'precio'=>50000,
            ],
            [
                'Tipo'=>'Doble',
                'precio'=>100000,
            ],
            [
                'Tipo'=>'Nupcial',
                'precio'=>500000,
            ],
            [
                'Tipo'=>'DosCamas',
                'precio'=>120000,
            ],
    
        ];
        DB::table('precios')->insert($precio);
    }
}
