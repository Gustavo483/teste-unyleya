<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LivroModel;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livros = [
            ['titulo' => 'título um', 'ano_lancamento' => '2022', 'fk_autor'=>'1','fk_editora'=>'1','fk_genero'=>'1'],
            ['titulo' => 'título dois', 'ano_lancamento' => '2022', 'fk_autor'=>'1','fk_editora'=>'1','fk_genero'=>'1'],
            ['titulo' => 'título três', 'ano_lancamento' => '2022', 'fk_autor'=>'1','fk_editora'=>'1','fk_genero'=>'1'],


        ];
        foreach ($livros as $key => $livro) {
            LivroModel::create($livro);
        }
    }
}
