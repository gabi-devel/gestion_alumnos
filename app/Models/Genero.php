<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $table = 'generos';
    protected $primaryKey = 'id_genero';
    protected $fillable = ['tipo'];

    public $timestamps = false;


    public function alumnos() {
        return $this->hasMany(Alumno::class, 'alumnos', 'id_genero', 'id_genero');
    }
}
