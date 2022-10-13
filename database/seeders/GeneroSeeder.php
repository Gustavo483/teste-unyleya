<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GeneroModel;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $generos = [
            ['nome_genero_literario' => 'genero 1'],
            ['nome_genero_literario' => 'genero 2'],
            ['nome_genero_literario' => 'genero 3'],
            ['nome_genero_literario' => 'genero 4'],
            ['nome_genero_literario' => 'genero 5'],
            ['nome_genero_literario' => 'genero 6'],
            ['nome_genero_literario' => 'genero 7'],
            ['nome_genero_literario' => 'genero 8'],
            ['nome_genero_literario' => 'genero 9'],
            ['nome_genero_literario' => 'genero 10'],
        ];
        foreach ($generos as $key => $genero34) {
            GeneroModel::create($genero34);
        }
    }
}
