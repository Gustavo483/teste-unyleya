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
            ['nome' => 'nome ficticio um', 'ano_nascimento' => '1987', 'sexo'=>'masculino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio dois', 'ano_nascimento' => '1987', 'sexo'=>'Feminino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio três', 'ano_nascimento' => '1987', 'sexo'=>'masculino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio quatro', 'ano_nascimento' => '1987', 'sexo'=>'Feminino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio cinco', 'ano_nascimento' => '1987', 'sexo'=>'Feminino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio seis', 'ano_nascimento' => '1987', 'sexo'=>'masculino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio sete', 'ano_nascimento' => '1987', 'sexo'=>'masculino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio oito', 'ano_nascimento' => '1987', 'sexo'=>'masculino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio nove', 'ano_nascimento' => '1987', 'sexo'=>'Feminino','nacionalidade'=>'Brasileira'],
            ['nome' => 'nome ficticio dez', 'ano_nascimento' => '1987', 'sexo'=>'masculino','nacionalidade'=>'Brasileira'],
        ];
        foreach ($autores as $key => $autor) {
            AutorModel::create($autor);
        }
    }
}
