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
            ['nome_genero_literario' => 'genero um'],
            ['nome_genero_literario' => 'genero dois'],
            ['nome_genero_literario' => 'genero três'],
            ['nome_genero_literario' => 'genero quatro'],
            ['nome_genero_literario' => 'genero cinco'],
            ['nome_genero_literario' => 'genero seis'],
            ['nome_genero_literario' => 'genero sete'],
            ['nome_genero_literario' => 'genero oito'],
            ['nome_genero_literario' => 'genero nove'],
            ['nome_genero_literario' => 'genero dez'],
        ];
        foreach ($generos as $key => $genero34) {
            GeneroModel::create($genero34);
        }
    }
}
