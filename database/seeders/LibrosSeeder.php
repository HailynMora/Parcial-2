<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = [
            [
                'ISBN' => '00982',
                'titulo' => 'Cien años de soledad',
                'precio' => 80200,
                'stok' => 100,
                'editorial' => '1',
            ],
            [
                'ISBN' => '12335',
                'titulo' => '¿Quien se ha llevado mi Queso?',
                'precio' => 25000,
                'stok' => 5,
                'editorial' => '2',
            ],
            [
                'ISBN' => '45371',
                'titulo' => 'Buscando a Alaska',
                'precio' => 30000,
                'stok' => 10,
                'editorial' => '3',
            ],
            [
                'ISBN' => '09451',
                'titulo' => 'A todos los chicos que me enamore',
                'precio' => 50000,
                'stok' => 50,
                'editorial' => '4',
            ],
            [
                'ISBN' => '20846',
                'titulo' => 'Love, Simon',
                'precio' => 24000,
                'stok' => 0,
                'editorial' => '5',
            ],

        ];
        DB::table('libros')->insert($date);
    }
}
