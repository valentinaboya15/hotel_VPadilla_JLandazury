<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use\Carbon\Carbon;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factura =[
            [
                'Numero'=>1,
                'clientes'=>1,
                'formapagos'=>1,
                'Entrada'=>Carbon::create('2020','11','02'),
                'Salida'=> Carbon::create('2020','11','03'),
                'Total'=>500000,//4
            ],
            [
                'Numero'=>2,
                'clientes'=>2,
                'formapagos'=>2,
                'Entrada'=>Carbon::create('2020','12','02'),
                'Salida'=>Carbon::create('2020','12','03'),
                'Total'=>250000,//1
            ],
            [
                'Numero'=>3,
                'clientes'=>3,
                'formapagos'=>1,
                'Entrada'=>Carbon::create('2020','11','02'),
                'Salida'=>Carbon::create('2020','11','03'),
                'Total'=>100000,//3
            ],
            [
                'Numero'=>4,
                'clientes'=>4,
                'formapagos'=>2,
                'Entrada'=>Carbon::create('2020','10','03'),
                'Salida'=>Carbon::create('2020','10','04'),
                'Total'=>120000,//5
            ],
            [
                'Numero'=>5,
                'clientes'=>5,
                'formapagos'=>1,
                'Entrada'=>Carbon::create('2020','01','03'),
                'Salida'=>Carbon::create('2020','01','04'),
                'Total'=>50000,//2
            ],
        ];
        DB::table('factura')->insert($factura);
    }
}
