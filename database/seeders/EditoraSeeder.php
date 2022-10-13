<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EditoraModel;

class EditoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editoras = [
            ['nome_editora' => 'editora 1'],
            ['nome_editora' => 'editora 2'],
            ['nome_editora' => 'editora 3'],
            ['nome_editora' => 'editora 4'],
            ['nome_editora' => 'editora 5'],
            ['nome_editora' => 'editora 6'],
            ['nome_editora' => 'editora 7'],
            ['nome_editora' => 'editora 8'],
            ['nome_editora' => 'editora 9'],
            ['nome_editora' => 'editora 10'],
        ];
        foreach ($editoras as $key => $editora) {
            EditoraModel::create($editora);
        }
    }
}
