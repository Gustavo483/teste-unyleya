<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditoraModel extends Model
{
    use HasFactory;
    protected $table = 'editoras';
    protected $fillable =['nome_editora'];

    public function livros()
    {
        return $this->hasMany(LivroModel::class,'fk_editora','id');
    }
}
