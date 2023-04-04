<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumnos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombres', 'apellido', 'direccion', 'telefono', 'email', 'fecha_nac', 'id_genero', 'id_carrera'];

    public $timestamps = false;


    public function generos() {
        return $this->belongsTo(Genero::class, 'generos', 'id', 'id_genero');
    }


}
