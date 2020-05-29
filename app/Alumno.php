<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $fillable = [
        'matricula', 'nombres', 'apellidos', 'correo_electronico', 'genero'
    ];
}
