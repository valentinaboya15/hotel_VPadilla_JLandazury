<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HabitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $habitaciones=[
            [
                'Descripcion'=>'Suite nupcial: Pensada para aquellas parejas recién casadas.',
                'Num_camas'=> 1,
                'Foto'=>'nupcial.jpg',
                'precio_id'=> 4,
            ],
            [
                'Descripcion'=>'Suites: Conocidas por ser las mejores y más lujosas habitaciones en cualquier hotel.',
                'Num_camas'=> 1,
                'Foto'=>'suite.jpg',
                'precio_id'=>1,
            ],
            [
                'Descripcion'=>'Habitación doble:esta clase de habitaciones son para dos personas.',
                'Num_camas'=> 1,
                'Foto'=>'doble.jpg',
                'precio_id'=>3,
               
            ],
            [
                'Descripcion'=>'Doble de uso individual:una habitación diseñada para dos personas.',
                'Num_camas'=> 2,
                'Foto'=>'2.jpg',
                'precio_id'=>5,
                
            ],
            [
                'Descripcion'=>'Individual: Ideal para quienes viajan solos.',
                'Num_camas'=> 1,
                'Foto'=>'sencilla.jpg',
                'precio_id'=> 2,
               
            ],
            ];
            DB::table('habitacion')->insert($habitaciones);
    }
}
