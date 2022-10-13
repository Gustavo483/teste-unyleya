<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivroModel extends Model
{
    use HasFactory;
    protected $table = 'livros';
    protected $fillable = ['titulo','data_lancamento','fk_autor','fk_editora','fk_genero'];

    public function autores()
    {
        return $this->belongsTo(AutorModel::class, 'fk_autor', 'id');
    }

    public function editoras()
    {
        return $this->belongsTo(EditoraModel::class, 'fk_editora','id');
    }

    public function generos()
    {
        return $this->belongsTo(GeneroModel::class,'fk_genero','id');
    }
}
