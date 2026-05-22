<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulariointeresprogramas extends Model
{
    protected $table = 'formulariointeresprogramas';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nombre1',
        'nombre2',
        'apellido1',
        'apellido2',
        'tipodocumento',
        'documento',
        'descripcion',
        'investigacioncarrera',
        'preocupacioncosto',
        'familiauniversidad',
        'responsabilidades',
        'conquienvivira',
        'trabajo',
        'llegadauniversidad',
        'almuerzo',
        'reaccionantedificultad',
        'animoestudio',
        'apoyoproceso',
        'actividadsentirbien',
        'interes',
        'perteneceequipo',
        'periodo'
    ];                                                           

}