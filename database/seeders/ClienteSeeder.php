<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Cliente =[
            [
                'DNI'=>'1234560712',
                'nombres'=>'Miguel Perez',
                'genero'=>'M',
                'domicilio'=>'Tumaco',
                'telefono'=>'00000001',
                'foto'=>'hombre1.jpg',
            ],
            [
                'DNI'=>'2314545098',
                'nombres'=>'Salomon Benitez',
                'genero'=>'M',
                'domicilio'=>'Pasto',
                'telefono'=>'12341238',
                'foto'=>'hombre2.jpg',
            ],
            [
                'DNI'=>'1231234650',
                'nombres'=>'Veronica Cruz',
                'genero'=>'F',
                'domicilio'=>'Buenos aires',
                'telefono'=>'32345654',
                'foto'=>'mujer1.jpg',
            ],
            [
                'DNI'=>'1098786923',
                'nombres'=>'Maria Estupiñan',
                'genero'=>'F',
                'domicilio'=>'bella vista',
                'telefono'=>'31523154',
                'foto'=>'mujer2.jpg',
            ],
            [
                'DNI'=>'1087908678',
                'nombres'=>'Emily Valverde',
                'genero'=>'F',
                'domicilio'=>'Llorente',
                'telefono'=>'31243509',
                'foto'=>'mujer3.jpg',
            ],

            ];
            DB::table('cliente')->insert($Cliente);
    }
}
