<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index()
    {
        return Matricula::all();
    }
    public function showMatricula($id)
    {
        $matricula = Matricula::find($id);
        $matricula->usuario;
        $matricula->curso;

        return $matricula;
    }
    public function create(Request $formDeInscrip)
    {
        $nuevaInscripcion = new Matricula();
        $nuevaInscripcion->usuario_id = $formDeInscrip->usuario_id;
        $nuevaInscripcion->curso_id = $formDeInscrip->curso_id;
        $nuevaInscripcion->save();
        return "El alumno fue inscrito con exito";
    }
}