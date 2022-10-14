<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutorModel extends Model
{
    use HasFactory;
    protected $table ='autores';
    protected $fillable = ['nome','ano_nascimento','sexo','nacionalidade'];

    public function livros()
    {
        return $this->hasMany(LivroModel::class,'fk_autor','id');
    }
}
