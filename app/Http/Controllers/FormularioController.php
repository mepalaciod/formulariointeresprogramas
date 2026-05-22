<?php

namespace App\Http\Controllers;

use App\Models\FormularioMetro; 
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function store(Request $request)

        FormularioMetro::create([

        'nombre1' => $request->nombre1,
            'nombre2' => $request->nombre2,
            'apellido1' => $request->apellido1,
            'apellido2' => $request->apellido2,
            'tipodocumento' => $request->tipodocumento,
            'documento' => $request->documento,
            'descripcion' => $request->descripcion,
            'investigacioncarrera' => $request->investigacioncarrera,
            'preocupacioncosto' => $request->preocupacioncosto,
            'familiauniversidad' => $request->familiauniversidad,
            'responsabilidades' => $request->responsabilidades,
            'conquienvivira' => $request->conquienvivira,
            'llegadauniversidad' => $request->llegadauniversidad,
            'almuerzo' => $request->almuerzo,
            'reaccionantedificultad' => $request->reaccionantedificultad,
            'animoestudio' => $request->animoestudio,
            'apoyoproceso' => $request->apoyoproceso,
            'actividadsentirbien' => $request->actividadsentirbien,
            'interes' => $request->interes,
            'perteneceequipo' => $request->perteneceequipo,


        return redirect()->back()->with('success', 'Formulario guardado correctamente');}
}