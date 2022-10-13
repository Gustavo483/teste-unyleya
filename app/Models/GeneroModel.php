<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneroModel extends Model
{
    use HasFactory;
    protected $table ='generos_literarios';
    protected $fillable =['nome_genero_literario'];

    public function livros()
    {
        return $this->hasMany(LivroModel::class,'fk_genero','id');
    }


}
