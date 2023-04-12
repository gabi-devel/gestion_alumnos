<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    protected $table = 'carreras';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre'];

    public $timestamps = false;


    public function alumnos() {
        return $this->hasMany(Alumno::class, 'alumnos', 'id_carrera', 'id');
    }

}
