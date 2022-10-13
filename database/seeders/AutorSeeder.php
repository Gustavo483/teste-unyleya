<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AutorModel;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autores = [
            ['nome' => 'nome ficticio 1', 'ano_nascimento' => '1987', 'sexo'=>'masculino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio 2', 'ano_nascimento' => '1987', 'sexo'=>'Feminino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio 3', 'ano_nascimento' => '1987', 'sexo'=>'masculino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio 4', 'ano_nascimento' => '1987', 'sexo'=>'Feminino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio 5', 'ano_nascimento' => '1987', 'sexo'=>'Feminino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio 6', 'ano_nascimento' => '1987', 'sexo'=>'masculino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio 7', 'ano_nascimento' => '1987', 'sexo'=>'masculino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio 8', 'ano_nascimento' => '1987', 'sexo'=>'masculino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio 9', 'ano_nascimento' => '1987', 'sexo'=>'Feminino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio 10', 'ano_nascimento' => '1987', 'sexo'=>'masculino','nacionalidade'=>'Brasileira'],
        ];
        foreach ($autores as $key => $autor) {
            AutorModel::create($autor);
        }
    }
}
