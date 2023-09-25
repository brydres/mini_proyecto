<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use Illuminate\Http\Request;

class ClaseController extends Controller
{
    public function index()
    {
        return Clase::all();
    }
    public function create(Request $formDeInscrip)
    {
        $nuevaInscripcion = new Clase();
        $nuevaInscripcion->usuario_id = $formDeInscrip->usuario_id;
        $nuevaInscripcion->curso_id = $formDeInscrip->curso_id;
        $nuevaInscripcion->save();
        return "El maestro fue inscrito con exito";
    }
}