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
            ['nome_editora' => 'editora um'],
            ['nome_editora' => 'editora dois'],
            ['nome_editora' => 'editora três'],
            ['nome_editora' => 'editora quatro'],
            ['nome_editora' => 'editora cinco'],
        ];
        foreach ($editoras as $key => $editora) {
            EditoraModel::create($editora);
        }
    }
}
