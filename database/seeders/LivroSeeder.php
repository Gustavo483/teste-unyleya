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
            ['titulo' => 'título 1', 'ano_lancamento' => '2022', 'fk_autor'=>'10','fk_editora'=>'1','fk_genero'=>'1'],
            ['titulo' => 'título 2', 'ano_lancamento' => '2022', 'fk_autor'=>'9','fk_editora'=>'2','fk_genero'=>'1'],
            ['titulo' => 'título 3', 'ano_lancamento' => '2022', 'fk_autor'=>'8','fk_editora'=>'3','fk_genero'=>'1'],
            ['titulo' => 'título 4', 'ano_lancamento' => '2022', 'fk_autor'=>'7','fk_editora'=>'4','fk_genero'=>'1'],
            ['titulo' => 'título 5', 'ano_lancamento' => '2022', 'fk_autor'=>'6','fk_editora'=>'4','fk_genero'=>'1'],
            ['titulo' => 'título 6', 'ano_lancamento' => '2022', 'fk_autor'=>'5','fk_editora'=>'5','fk_genero'=>'1'],
            ['titulo' => 'título 7', 'ano_lancamento' => '2022', 'fk_autor'=>'4','fk_editora'=>'2','fk_genero'=>'1'],
            ['titulo' => 'título 8', 'ano_lancamento' => '2022', 'fk_autor'=>'3','fk_editora'=>'3','fk_genero'=>'1'],
            ['titulo' => 'título 9', 'ano_lancamento' => '2022', 'fk_autor'=>'2','fk_editora'=>'4','fk_genero'=>'1'],
            ['titulo' => 'título 10', 'ano_lancamento' => '2022','fk_autor'=>'1','fk_editora'=>'1','fk_genero'=>'1'],

        ];
        foreach ($livros as $key => $livro) {
            LivroModel::create($livro);
        }
    }
}
